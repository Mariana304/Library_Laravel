<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if ($this->getMethod() == 'POST') {

            return [

                'title' => 'required',
                'summary'  => 'required',
                'pages' => 'required',
                'author_id' => 'required',
                'price' => 'required',
                'format' => 'required',
                'path_cover' => 'required|image',

            ];
        } else {
            return [

                'title' => 'required',
                'summary'  => 'required',
                'pages' => 'required',
                'author_id' => 'required',
                'price' => 'required',
                'format' => 'required',
                'path_cover' => [

                    $this->route('book') ? '' : 'image'
                ],
            ];
        }
    }
}
