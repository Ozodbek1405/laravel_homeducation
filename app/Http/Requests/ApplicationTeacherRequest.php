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
            'name.required' => (__('lang.ism_familya')),
            'age_teacher.required' => (__('lang.yosh_req')),
            'phone_number.numeric' => (__('lang.tel_req')),
            'phone_number.min' => (__('lang.tel_min')),
            'speciality_science_teacher.required' => (__('lang.science_req')),
            'degree_teacher.required' =>(__('lang.variant_req')),
            'lesson_lang.required' => (__('lang.variant_req')),
            'resume.required' => (__('lang.fayl_req')),
            'resume.mimes' => (__('lang.fayl_mimes')),
            'resume.max' => (__('lang.fayl_max')),
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
