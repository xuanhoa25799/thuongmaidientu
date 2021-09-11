<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SachAddRequest extends FormRequest
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
            'ten_sach'=> 'required|unique:saches|max:255|min:5',
            'gia'=>'required',

            'nam_xb'=>'required',
            'mo_ta'=>'required',
            'ma_the_loai'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'ten_sach.required' => 'Tên sách không được để trống',
            'ten_sach.unique'  => 'Tên sách không được trùng',
            'ten_sach.max' => 'Tên sách không được quá 255 ký tự',
            'ten_sach.min' => 'Tên sách không được ít hơn 5 ký tự',
            'gia.required' => 'Giá sách không được để trống',
            'nam_xb.required' => 'Năm xuất bản không được để trống',
            'mo_ta.required' => 'Mô tả sách không được để trống',
            'ma_the_loai.required' => 'Thể loại sách không được để trống'
        ];
    }
}
