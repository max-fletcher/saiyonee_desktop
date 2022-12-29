<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\ContestImage;
use Illuminate\Http\Request;
use App\Rules\ValidateVideoRule;
use DB;

class ContestController extends Controller
{
    public function index(){
        return view('frontend.contest');
    }

    public function store(Request $request){

        $request->validate([
                'contest_user_name'     => ['required', 'string','min:2', 'max:255'],
                'contest_user_email'    => ['required', 'string','min:2', 'max:255', 'unique:contests,email'],
                'contest_images'        => ['required', 'array', 'between:1,10'],
                'contest_images.*'      => ['required', 'file', 'image'],
                'contest_video'         => ['required', new ValidateVideoRule],
                // 'mimes:x-flv,x-mpegURL,MP2T,3gpp,quicktime,avi,mpeg,mp4,ogg,x-ms-wmv'
                // 'mimetypes:video/x-flv,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/avi,video/mpeg,video/mp4,video/ogg,video/x-ms-wmv'
            ],
            [
                'contest_user_email.unique'     => 'Only one submission per user allowed.',
            ]
        );

        DB::beginTransaction();
        try {
            $video = $request->file('contest_video')[0];
            $contest_video_name = md5(uniqid()). '.' .$video->extension();
            $directory           = 'uploads/contest_video/';
            $video->move($directory, $contest_video_name);
            $contest_video_name = $directory . $contest_video_name;

            $contest        = new Contest();
            $contest->name  = $request->contest_user_name;
            $contest->email = $request->contest_user_email;
            $contest->video = $contest_video_name;
            $contest->save();

            foreach ($request->file('contest_images') as $contest_image) {
                $contest_image_model = new ContestImage();

                $image = $contest_image;
                $contest_image_name = md5(uniqid()). '.' .$image->extension();
                $directory           = 'uploads/contest_image/';
                $image->move($directory, $contest_image_name);
                $contest_image_name = $directory . $contest_image_name;

                $contest_image_model->contest_id = $contest->id;
                $contest_image_model->image = $contest_image_name;
                $contest_image_model->save();
            }
            
            DB::commit();
            return redirect()->route('contest.index')->with('contest_success', 'Contest Data Submitted Successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('contest.index')->with('contest_failed', 'Something went wrong! Please try again.');
        }
    }
}
