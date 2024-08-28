<?php

namespace App\Http\Requests\Karyawan;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKaryawanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $karyawanId = $this->route('karyawan')->id;
        return [
            'nip' => 'nullable|unique:karyawans,nip,' . $karyawanId,
            'nama' => 'nullable|max:255',
            'password' => 'nullable|min:8',
        ];
    }
}
