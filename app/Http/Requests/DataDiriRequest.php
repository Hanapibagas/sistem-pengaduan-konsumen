<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataDiriRequest extends FormRequest
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
            'nama' => 'required|max:255',
            'umur' => 'required|integer',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|max:255',
            'telepon' => 'required',
            'bukti_diri' => 'required'
        ];
    }
}
