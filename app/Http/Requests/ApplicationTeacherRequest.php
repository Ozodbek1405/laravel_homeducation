<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationTeacherRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' =>  'numeric|unique:users|min:13',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|min:8',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => __('login.name.required'),
            'name.unique' => __('login.name.unique'),
            'email.required' => __('login.email.required'),
            'email.email' => __('login.email.email'),
            'email.unique' => __('login.email.unique'),
            'password.required' => __('login.password.required'),
            'password.min' => __('login.password.min'),
            'password.confirmed' => __('login.password.confirmed'),
        ];
    }
    public function getValidatorInstance()
    {
        $this->cleanPhoneNumber();
        return parent::getValidatorInstance();
    }

    protected function cleanPhoneNumber()
    {
        if($this->request->has('phone_number')){
            $this->merge([
                'phone_number' => str_replace(['-','(',')'], '', $this->request->get('phone_number'))
            ]);
        }
    }
}
