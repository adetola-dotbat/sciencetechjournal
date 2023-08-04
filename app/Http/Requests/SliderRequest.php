<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];
    }
}
