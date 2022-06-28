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
            'name.required' => (__('lang.ism_familya')),
            'number_of_children.required' => (__('lang.maydon_req')),
            'phone_number.numeric' => (__('lang.tel_req')),
            'phone_number.min' => (__('lang.tel_min')),
            'about_children.required' => (__('lang.maydon_req')),
            'children_age.required' => (__('lang.maydon_req')),
            'teacher_gender.required' => (__('lang.variant_req')),
            'science_lang.required' => (__('lang.variant_req')),
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
