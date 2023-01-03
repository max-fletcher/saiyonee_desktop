<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactUsController extends Controller
{
    public function submit_contact_us(Request $request){

        // Form validation
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email:rfc,dns', 'max:255'],
            // 'subject'=> ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:65500']
        ]);

        // dd(config('backend.saiyonee_backend_url').'/api/submit_contact_us');

        $response = Http::post(config('backend.saiyonee_backend_url').'/api/submit_contact_us_mail', [
            'name' => $request->name,
            'email' => $request->email,
            // 'subject' => $request->subject,
            'message' => $request->message,
        ]);

        if($response->ok()){
            return response()->json(['status' => 'success', 'message' => 'Mail sent successfully!']);
        }

        return response()->json(['status' => 'failed', 'message' => 'Something went wrong! Please try again.']);

    }
}
