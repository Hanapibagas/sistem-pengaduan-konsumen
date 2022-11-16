<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataDiadukanRequest extends FormRequest
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
            'nama_pemilik' => 'required',
            'perusahaan' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required',
            'telepon' => 'required',
            'faximile' => 'required',
        ];
    }
}
