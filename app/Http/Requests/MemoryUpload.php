<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemoryUpload extends FormRequest
{
    protected $redirect = '/#section4';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'memory_image'   => 'required|image',
            'memory_comment' => 'required|max:250|string',
        ];
    }
}
