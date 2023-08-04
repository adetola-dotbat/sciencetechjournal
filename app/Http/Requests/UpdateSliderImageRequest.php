<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderImageRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'image' => 'required'
        ];
    }
}
