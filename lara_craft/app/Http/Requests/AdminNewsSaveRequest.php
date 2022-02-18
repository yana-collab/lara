<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminNewsSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

                'title' => 'required|max:50|unique:news',
                'content' => 'required|max:1000',
                'category_id' => 'required|integer|exists:categories,id',
                'active' => 'boolean',
                'publish_date' => 'date'

        ];
    }

}
