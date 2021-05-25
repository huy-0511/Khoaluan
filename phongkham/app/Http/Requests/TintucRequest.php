<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TintucRequest extends FormRequest
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
            'tentintuc' => 'required|max:190|min:3|unique:new,tentintuc,'.$this->id,
            'motatintuc' => 'required',
            'noidungtintuc' => 'required',
            'hinhanhtintuc' => 'required',
        ];
    }
    public function messages()
    {
        return[
             'tentintuc.required'=>'Dữ liệu không được để trống',
             'tentintuc.unique'=>'Dữ liệu đã bị trùng',
             'tentintuc.max'=>'Dữ liệu không quá 20 kí tự',
             'tentintuc.min'=>'Dữ liệu phải nhiều hơn 10 kí tự',
             'motatintuc.required'=>'Dữ liệu không được để trống',
             'noidungtintuc.required'=>'Dữ liệu không được để trống',
             'hinhanhtintuc.required'=>'Dữ liệu không được để trống',
         ];
    }
}
