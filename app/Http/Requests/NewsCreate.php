<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsCreate extends FormRequest
{
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
            'news_title' => ['required', 'string', 'min:5', 'max: 255'],
            'news_description' => ['required'],
            'category_id' => ['required', 'integer']
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ":attribute необходимо заполнить"
        ];
    }

    public function attributes(): array
    {
        return [
            'news_title' => 'заголовок новости'
        ];
    }
}
