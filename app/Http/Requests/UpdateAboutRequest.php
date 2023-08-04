<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'description' => 'required',
            'welcome_message' => 'required'
        ];
    }
}
