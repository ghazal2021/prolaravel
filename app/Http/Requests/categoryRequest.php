<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoryRequest extends FormRequest
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
    public function prepareForValidation()
    {
     if($this->slug) {
         $this->merge(['slug' => make_slug($this->slug)]);
     }else{
         $this->merge(['slug'=>make_slug($this->title)]);
     }
}
    public function rules()
    {
        return [
           'name'=>'required|min:3',
            'slug'=>'min:3',
            'meta_description'=>'required',
            'meta_keywords'=>'required',
        ];
    }

    public function messages()
    {
     return[
         'name.required'=>'categori ro vared kon ',
         'name.min'=>'name bayad balaye 3 char bashe  ',
         'slug.required'=>'slug ro poor kon',
         'slug.min'=>'min bayad balay 3 char bashe',
         'meta_description.required'=>'meta ro poor kon ',
         'meta_keywords'=>'meta-key ro poor kon '
     ];
    }
}
