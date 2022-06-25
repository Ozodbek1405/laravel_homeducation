<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationParentRequest extends FormRequest
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
            'number_of_children' => 'required',
            'phone_number' =>  'numeric|min:13',
            'about_children' => 'required',
            'children_age' => 'required',
            'teacher_gender' => 'required',
            'science_lang' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => ('Ism-familya kiriting'),
            'number_of_children.required' => ('Maydonni to\'ldiring'),
            'phone_number.numeric' => ('Telefon raqamingizni to\'liq kiriting'),
            'phone_number.min' => ('Telefon raqam 13 ta bo\'lishi kerak'),
            'about_children.required' => ('Maydonni to\'ldiring'),
            'children_age.required' => ('Maydonni to\'ldiring'),
            'teacher_gender.required' => ('Variantlardan birini tanlang'),
            'science_lang.required' => ('Variantlardan birini tanlang'),
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
