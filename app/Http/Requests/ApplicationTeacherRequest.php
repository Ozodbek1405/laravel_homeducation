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
            'phone_number' =>  'numeric|min:13',
            'speciality_science_teacher' => 'required',
            'degree_teacher' => 'required',
            'lesson_lang' => 'required',
            'resume' => 'required|mimes:pdf,docx|max:10000',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => ('Ism-familya kiriting'),
            'age_teacher.required' => ('Yoshingizni kiriting'),
            'phone_number.numeric' => ('Telefon raqamingizni to\liq kiriting'),
            'phone_number.min' => ('Telefon raqam 13 ta bo\'lishi kerak'),
            'speciality_science_teacher.required' => ('Mutaxassisligingizni kiriting'),
            'degree_teacher.required' => ('Variantlardan birini tanlang'),
            'lesson_lang.required' => ('Variantlardan birini tanlang'),
            'resume.required' => ('Fayl yuklang'),
            'resume.mimes' => ('Bunday turdagi faylni yuklab bo\'lmaydi'),
            'resume.max' => ('Bu faylning hajmi juda katta'),
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
