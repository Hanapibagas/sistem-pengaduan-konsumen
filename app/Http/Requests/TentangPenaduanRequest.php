<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TentangPenaduanRequest extends FormRequest
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
            'jenis_pengaduan' => 'required|max:255',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'bukti_pembelian' => 'required',
            'bukti_saksi' => 'required',
            'barang_bukti' => 'required',
            'bentuk_kerugian' => 'required',
        ];
    }
}
