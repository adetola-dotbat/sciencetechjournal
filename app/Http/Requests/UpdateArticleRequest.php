<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
            'abstract' => 'required',
            'pages' => 'required',
            'author' => 'required',
        ];
    }
}
