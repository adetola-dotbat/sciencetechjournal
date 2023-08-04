<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDesignationRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'designation' => 'required'
        ];
    }
}
