<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEditorRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required',
            'institution' => 'required',
            'designation_id' => 'required',
        ];
    }
}
