<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidateVideoRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // dd($value[0]->getMimeType());
        return(in_array($value[0]->getMimeType(),
            [
                "video/x-flv",
                "application/x-mpegURL",
                "video/MP2T",
                "video/3gpp",
                "video/quicktime",
                "video/avi",
                "video/mpeg",
                "video/mp4",
                "video/ogg",
                "video/x-ms-wmv"
            ])
        );
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be a video.';
    }
}
