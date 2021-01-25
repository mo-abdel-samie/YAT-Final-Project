<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' =>'required',
            'role' =>'required',
            'image'=>'required',
            'phone'=>'required',
            'email' =>'required',
            'aboute_me'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'name required',
            'role.required' =>'role required',
            'image.required'=>'image required',
            'phone.required'=>'phone required',
            'email.required' =>'Email required',
            'aboute_me.required'=>'About required',
        ];
    }
}
