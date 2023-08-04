<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CallForPaperRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'description' => 'required',
        ];
    }
}
