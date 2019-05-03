<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamRequest extends FormRequest
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
            'tenSP' => 'required',
            'tomTat' => 'required',
            'keyword' => 'required',
            'gia' => 'required',
            'img' => 'required',
            'img1' => 'required',
            'img2' => 'required',
            'img3' => 'required',
            'productDetail' => 'required',
            'maLoaiSanPham' => 'required',
            'maSanPham' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'tenSP.required' => 'Tên sản phẩm không hợp lệ',
            'tomTat.required' => 'Tóm tắt không hợp lệ',
            'keyword.required' => 'Keyword không hợp lệ',
            'gia.required' => 'Giá không hợp lệ',
            'img.required' => 'hình chính chưa hợp lệ',
            'img1.required' => 'hình phụ 1 chưa hợp lệ',
            'img2.required' => 'hình phụ 2 chưa hợp lệ',
            'img3.required' => 'hình phụ 3 chưa hợp lệ',
            'productDetail.required' => 'bạn chưa nhap nội dung',
            'maLoaiSanPham.required' => 'bạn chưa chọn mã loại sản phẩm',
            'maSanPham.required' => 'bạn chưa chọn mã sản phẩm',
        ];
    }
}
