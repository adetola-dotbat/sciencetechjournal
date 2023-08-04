<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuidelineRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'guideline' => 'required'
        ];
    }
}
