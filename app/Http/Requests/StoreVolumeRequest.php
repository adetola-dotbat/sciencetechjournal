<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVolumeRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'required',
        ];
    }
}
