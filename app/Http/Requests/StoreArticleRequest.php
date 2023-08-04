<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
            'abstract' => 'required',
            'file' => 'required',
            'pages' => 'required',
            'author' => 'required',
        ];
    }
}
