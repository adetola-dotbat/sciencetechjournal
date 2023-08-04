<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreManuscriptRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'title' => 'required',
            'abstract' => 'required',
            'file' => 'required',
            // 'page_no' => 'required',
            'authors' => 'required',
            // 'user_id' => 'required',
        ];
    }
}
