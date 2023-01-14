<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;
use App\Rules\ValidateVideoRule;
use DB;
use GuzzleHttp\Client;
use Pion\Laravel\ChunkUpload\Exceptions\UploadFailedException;
use Illuminate\Http\UploadedFile;
use Pion\Laravel\ChunkUpload\Exceptions\UploadMissingFileException;
use Pion\Laravel\ChunkUpload\Handler\AbstractHandler;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class ContestController extends Controller
{
    public function index(){
        return view('frontend.contest');
    }

    public function ajax_store(Request $request){

        dd($request->all(), session()->get('contest_identifier_token'));

        if($request->ajax()){

            $validation_rules = [
                'contest_user_name'             => ['required', 'string','min:2', 'max:255'],
                'contest_marriage_year'         => ['required', 'string', 'date_format:"Y"'],
                'contest_marriage_medium'       => ['required', 'string', 'max:255'],
                'contest_known_duration'        => ['required', 'string', 'max:255'],
                'contest_user_email'            => ['required', 'string','min:2', 'max:255', 'unique:contests,email'],
                'contest_phone_number'          => ['required', 'string', 'max:255', 'unique:contests,phone'],
                'contest_marriage_description'  => ['nullable', 'string', 'max:65500'],
    
                'contest_feedback'              => ['nullable', 'string', 'max:65500'],
                // 'mimes:x-flv,x-mpegURL,MP2T,3gpp,quicktime,avi,mpeg,mp4,ogg,x-ms-wmv'
                // 'mimetypes:video/x-flv,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/avi,video/mpeg,video/mp4,video/ogg,video/x-ms-wmv'
            ];

            $validation_messages = [
                'contest_user_name.required'                => 'The user names are required.',
                'contest_user_name.string'                  => 'The user names have to be a string.',
                'contest_user_name.min'                     => 'The user names must be at least 2 characters in length.',
                'contest_user_name.max'                     => 'The user names must be below 255 characters in length.',
    
                'contest_marriage_year.required'            => 'The marriage year is required.',
                'contest_marriage_year.string'              => 'The marriage year has to be a string.',
                'contest_marriage_year.date_format'         => 'The marriage year has to be in the format \'XXXX\'.',
    
                'contest_known_duration.required'           => 'The marriage known duration is required.',
                'contest_known_duration.string'             => 'The marriage known duration has to be a string.',
                'contest_known_duration.max'                => 'The marriage known duration must be below 255 characters in length.',
    
                'contest_user_email.required'               => 'The user email is required.',
                'contest_user_email.string'                 => 'The user email must be a string.',
                'contest_user_email.min'                    => 'The user email must be at least 2 characters in length.',
                'contest_user_email.max'                    => 'The user email must be below 255 characters in length.',
                'contest_user_email.unique'                 => 'Only one submission per email allowed.',
    
                'contest_phone_number.required'             => 'The phone number is required.',
                'contest_phone_number.string'               => 'The phone number must be a string.',
                'contest_phone_number.max'                  => 'The phone number must be below 255 characters in length.',
                'contest_phone_number.unique'               => 'Only one submission per phone number allowed.',
    
                'contest_marriage_description.string'       => 'The marriage description must be a string.',
                'contest_marriage_description.max'          => 'The marriage description must be below 65500 characters in length.',
    
                'contest_feedback.string'                   => 'The contest feedback must be a string.',
                'contest_feedback.max'                      => 'The contest feedback must be below 65500 characters in length.',
            ];

            if(!$request->contest_image_gdrive_url && !$request->contest_image){
                $validation_rules['contest_image']                           = ['required'];
                $validation_rules['contest_image_gdrive_url']                = ['required'];
    
                $validation_messages['contest_image.required']               = 'Either an image or a google drive/dropbox/onedrive link has to be provided.';
                $validation_messages['contest_image_gdrive_url.required']    = 'Either an image or a google drive/dropbox/onedrive link has to be provided.';
            }
            if($request->contest_image_gdrive_url){
                $validation_rules['contest_image_gdrive_url']                = ['required'];
    
                $validation_messages['contest_image_gdrive_url.starts_with'] = 'Not a valid google drive/dropbox/onedrive link.';
            }
            else{
                $validation_rules['contest_image']                           = ['required', 'array'];
                $validation_rules['contest_image.*']                         = ['file', 'image', 'max:30720'];
    
                $validation_messages['contest_image.*.file']                 = 'Contest image has to be a file.';
                $validation_messages['contest_image.*.image']                = 'Contest image has to be a file type of image.';
                $validation_messages['contest_image.*.max']                  = 'Contest image should have a file size lower than 30MB.';
            }

            if(!$request->contest_video_gdrive_url && !$request->contest_video){
                $validation_rules['contest_video']                           = ['required'];
                $validation_rules['contest_video_gdrive_url']                = ['required'];
    
                $validation_messages['contest_video.required']               = 'Either a video or a google drive/dropbox/onedrive link has to be provided.';
                $validation_messages['contest_video_gdrive_url.required']    = 'Either a video or a google drive/dropbox/onedrive link has to be provided.';
            }
            if($request->contest_video_gdrive_url){
                $validation_rules['contest_video_gdrive_url']                = ['required'];
    
                $validation_messages['contest_video_gdrive_url.starts_with'] = 'Not a valid google drive/dropbox/onedrive link.';
            }
            else{
                $validation_rules['contest_video']                           = ['required', 'array', new ValidateVideoRule];
                $validation_rules['contest_video.*']                         = ['required', 'file', 'max:307200'];
    
                $validation_messages['contest_video.*.file']                 = 'Contest video has to be a file.';
                $validation_messages['contest_video.*.max']                  = 'Contest video should have a file size lower than 300MB.';
            }
    
            $request->validate($validation_rules, $validation_messages);
    
            // dd($validation_rules, $validation_messages , $request);
    
            DB::beginTransaction();
            try {
                if(!$request->contest_image_gdrive_url){
                    $image = $request->file('contest_image')[0];
                    $contest_image_name = md5(uniqid()). '.' .$image->extension();
                    $directory           = 'uploads/contest_image/';
                    $image->move($directory, $contest_image_name);
                    $contest_image_name = $directory . $contest_image_name;
                }
                else{
                    $contest_image_name = null;
                }
                
                if(!$request->contest_video_gdrive_url){
                    $video = $request->file('contest_video')[0];
                    $contest_video_name = md5(uniqid()). '.' .$video->extension();
                    $directory           = 'uploads/contest_video/';
                    $video->move($directory, $contest_video_name);
                    $contest_video_name = $directory . $contest_video_name;
                }
                else{
                    $contest_video_name = null;
                }
    
                $contest                    = new Contest();
                $contest->name              = $request->contest_user_name;
                $contest->year              = $request->contest_marriage_year;
                $contest->medium            = $request->contest_marriage_medium;
                $contest->known_duration    = $request->contest_known_duration;
                $contest->email             = $request->contest_user_email;
                $contest->phone             = $request->contest_phone_number;
                $contest->description       = $request->contest_marriage_description;
                $contest->image             = $contest_image_name;
                $contest->gdrive_image_link = $request->contest_image_gdrive_url;
                $contest->video             = $contest_video_name;
                $contest->gdrive_video_link = $request->contest_video_gdrive_url;
                $contest->feedback          = $request->contest_feedback;
                $contest->save();
    
                $contest_api_data = [
                    'password'                      => 'N4NUGgALgwpyrzO',
                    'contest_user_id'               => $contest->id,
                    'contest_user_name'             => $contest->name,
                    'contest_marriage_year'         => $request->contest_marriage_year,
                    'contest_marriage_medium'       => $request->contest_marriage_medium,
                    'contest_known_duration'        => $request->contest_known_duration,
                    'contest_user_email'            => $contest->email,
                    'contest_phone_number'          => $request->contest_phone_number,
                    'contest_marriage_description'  => $request->contest_marriage_description,
    
                    'contest_image'                 => $contest->image ? asset($contest->image) : null,
                    'contest_image_gdrive_url'      => $contest->gdrive_image_link,
                    'contest_video'                 => $contest->video ? asset($contest->video) : null,
                    'contest_video_gdrive_url'      => $contest->gdrive_video_link,
    
                    'contest_feedback'              => $request->contest_feedback,
                ];
    
                $client = new Client();
    
                $http_request = $client->post(config('backend.saiyonee_backend_url') . 'api/store_from_api', [
                    'form_params' => [
                        'data' => json_encode($contest_api_data)
                    ]
                ]);
    
                $response = json_decode($http_request->getBody());
    
                if($http_request->getStatusCode() == 200 && $response->status == 'success'){
                    DB::commit();
                    return redirect()->route('contest.index')->with('contest_success', 'Contest Data Submitted Successfully!');
                }
                elseif($http_request->getStatusCode() == 401 && $response->status == 'failed'){
                    return redirect()->route('contest.index')->with('contest_failed', 'Password didn\'t match.');
                }
                else{
                    DB::rollback();
                    return redirect()->route('contest.index')->with('contest_failed', 'Something went wrong! Please try again.');
                }
    
            } catch (\Exception $e) {
                DB::rollback();
                return redirect()->route('contest.index')->with('contest_failed', 'Something went wrong! Please try again.');
            }
        }

    }



    public function image_upload(Request $request) { //from web route
        // create the file receiver

        $receiver = new FileReceiver("file", $request, HandlerFactory::classFromRequest($request));

        // check if the upload is success, throw exception or return response you need
        if ($receiver->isUploaded() === false) {
            throw new UploadMissingFileException();
        }

        // receive the file
        $save = $receiver->receive();

        // check if the upload has finished (in chunk mode it will send smaller files)
        if ($save->isFinished()){
            // save the file and return any response you need, current example uses `move` function. If you are
            // not using move, you need to manually delete the file by unlink($save->getFile()->getPathname())
            return $this->imageSaveFile($save->getFile(), $request);
        }

      // we are in chunk mode, lets send the current progress
      /** @var AbstractHandler $handler */
        $handler = $save->handler();
    
        return response()->json([
            'status' => true,
            "done" => $handler->getPercentageDone()
        ]);
    }

    protected function imageSaveFile(UploadedFile $file, Request $request) {
        $fileName = $this->createImageFilename($file);
    
        // Get file mime type
        // $mime_original = $file->getMimeType();
        // $mime = str_replace('/', '-', $mime_original);

        $filePath = "uploads/contest_image/";
        $finalPath = public_path($filePath);
    
        // $fileSize = $file->getSize();
        // move the file name
        $file->move($finalPath, $fileName);

        // IF ALREADY EXISTS, THEN JUST RETRIEVE AND OVERWRITE VALUE. ELSE, CREATE NEW.
        $contest_data_identifier = session()->get('contest_identifier_token');
        $contest_data    = Contest::where('contest_data_identifier', $contest_data_identifier)->whereNotNull('contest_data_identifier')->first();
        if($contest_data){
            $contest_data->image                   = $filePath.$fileName;
            $contest_data->contest_data_identifier = $contest_data_identifier;
            $contest_data->save();
        }
        else{
            $contest_data                          = new Contest();
            $contest_data->image                   = $filePath.$fileName;
            $contest_data->contest_data_identifier = $contest_data_identifier;
            $contest_data->save();
        }

        // $url_base = 'storage/upload/medialibrary/'.$user_obj->id."/{$folderDATE}/".$fileName;

        return response()->json([
            'status'            => 'success',
            'path'              => $finalPath,
            'name'              => $fileName,
            // 'mime_type'         => $mime,
            // 'contest__data_id'  => $contest_data->id
        ]);
    }

    protected function createImageFilename(UploadedFile $file) {
        $extension = $file->extension();
        // $filename = str_replace(".".$extension, "", $file->getClientOriginalName()); // Filename without extension
        $filename = md5(uniqid());

        session()->put('file_name_with_ext', $filename.".".$extension);
        
        // dd($file->getClientOriginalExtension(), $file->getClientOriginalName(), $extension, $filename);

        // dd($filename.".".$extension);

        //delete timestamp from file name
        // $temp_arr = explode('_', $filename);
        // if ( isset($temp_arr[0]) ) unset($temp_arr[0]);
        // $filename = implode('_', $temp_arr);

        //here you can manipulate with file name e.g. HASHED
        return $filename.".".$extension;
    }

    public function image_delete(){

        // $user_obj = auth()->user();

        $file = session()->get('file_name_with_ext');

        // return response([
        //     'filename' => $file
        // ]);

        //delete timestamp from filename
        // $temp_arr = explode('_', $file);
        // if ( isset($temp_arr[0]) ) unset($temp_arr[0]);
        // $file = implode('_', $temp_arr);

        // $dir = $request->date;

        $filePath = "uploads/contest_image/";
        $finalPath = public_path($filePath);

        if (unlink($finalPath.$file) ){
            return response()->json([
                'status' => 'success'
            ], 200);
        }
        else{
            return response()->json([
                'status' => 'error'
            ], 403);
        }
    }





    public function video_upload(Request $request) {  //from web route
        // create the file receiver

        $receiver = new FileReceiver("file", $request, HandlerFactory::classFromRequest($request));

        // check if the upload is success, throw exception or return response you need
        if ($receiver->isUploaded() === false) {
            throw new UploadMissingFileException();
        }

        // receive the file
        $save = $receiver->receive();

        // check if the upload has finished (in chunk mode it will send smaller files)
        if ($save->isFinished()){
            // save the file and return any response you need, current example uses `move` function. If you are
            // not using move, you need to manually delete the file by unlink($save->getFile()->getPathname())
            return $this->videoSaveFile($save->getFile(), $request);
        }

      // we are in chunk mode, lets send the current progress
      /** @var AbstractHandler $handler */
        $handler = $save->handler();
    
        return response()->json([
            'status' => true,
            "done" => $handler->getPercentageDone()
        ]);
    }

    protected function videoSaveFile(UploadedFile $file, Request $request) {
        $fileName = $this->createVideoFilename($file);
    
        // Get file mime type
        // $mime_original = $file->getMimeType();
        // $mime = str_replace('/', '-', $mime_original);

        $filePath = "uploads/contest_video/";
        $finalPath = public_path($filePath);
    
        // $fileSize = $file->getSize();
        // move the file name
        $file->move($finalPath, $fileName);

        // IF ALREADY EXISTS, THEN JUST RETRIEVE AND OVERWRITE VALUE. ELSE, CREATE NEW.
        $contest_data_identifier = session()->get('contest_identifier_token');
        $contest_data    = Contest::where('contest_data_identifier', $contest_data_identifier)->whereNotNull('contest_data_identifier')->first();
        if($contest_data){
            $contest_data->video                   = $filePath.$fileName;
            $contest_data->contest_data_identifier = $contest_data_identifier;
            $contest_data->save();
        }
        else{
            $contest_data                          = new Contest();
            $contest_data->video                   = $filePath.$fileName;
            $contest_data->contest_data_identifier = $contest_data_identifier;
            $contest_data->save();
        }

        // $url_base = 'storage/upload/medialibrary/'.$user_obj->id."/{$folderDATE}/".$fileName;

        return response()->json([
            'status'            => 'success',
            'path'              => $finalPath,
            'name'              => $fileName,
            // 'mime_type'         => $mime,
            // 'contest__data_id'  => $contest_data->id
        ]);
    }

    protected function createVideoFilename(UploadedFile $file) {
        $extension = $file->extension();
        // $filename = str_replace(".".$extension, "", $file->getClientOriginalName()); // Filename without extension
        $filename = md5(uniqid());

        session()->put('file_name_with_ext', $filename.".".$extension);
        
        // dd($file->getClientOriginalExtension(), $file->getClientOriginalName(), $extension, $filename);

        // dd($filename.".".$extension);

        //delete timestamp from file name
        // $temp_arr = explode('_', $filename);
        // if ( isset($temp_arr[0]) ) unset($temp_arr[0]);
        // $filename = implode('_', $temp_arr);

        //here you can manipulate with file name e.g. HASHED
        return $filename.".".$extension;
    }

    public function video_delete(){

        // $user_obj = auth()->user();

        $file = session()->get('file_name_with_ext');

        // return response([
        //     'filename' => $file
        // ]);

        //delete timestamp from filename
        // $temp_arr = explode('_', $file);
        // if ( isset($temp_arr[0]) ) unset($temp_arr[0]);
        // $file = implode('_', $temp_arr);

        // $dir = $request->date;

        $filePath = "uploads/contest_video/";
        $finalPath = public_path($filePath);

        if (unlink($finalPath.$file) ){
            return response()->json([
                'status' => 'success'
            ], 200);
        }
        else{
            return response()->json([
                'status' => 'error'
            ], 403);
        }
    }
}
