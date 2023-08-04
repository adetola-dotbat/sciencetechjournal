<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateManuscriptRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'authors' => 'required',
            'abstract' => 'required',
        ];
    }
}
