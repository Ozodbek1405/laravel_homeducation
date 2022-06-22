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
            'age_teacher' => 'required',
            'phone_number' =>  'required|min:13',
            'speciality_science_teacher' => 'required',
            'degree_teacher' => 'required',
            'lesson_lang' => 'required',
            'resume' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => ('login.name.required'),
            'number_of_children.required' => ('login.name.unique'),
            'phone_number.required' => ('login.email.required'),
            'about_children.required' => ('login.email.email'),
            'children_age.required' => ('login.email.unique'),
            'teacher_gender.required' => ('login.password.required'),
            'science_lang.required' => ('login.password.min'),
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
