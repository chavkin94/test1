<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//нужно ли авторизовываться или нет
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
           'message' => 'required|min:15|max:500'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Имя'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя является обязательным',
            'email.email' => 'Поле email является email',
            'subject.required' => 'Поле тема является обязательным',
            'message.required' => 'Поле сообщение является обязательным'

        ];
    }


}
