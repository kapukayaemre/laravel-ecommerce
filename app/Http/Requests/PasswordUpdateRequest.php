<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "current_password" => ["required", "current_password"],
            "password"         => ["required", "confirmed", "min:8"]
        ];
    }

    public function messages(): array
    {
        return [
            "current_password.required"         => "Mevcut Şifrenizi Giriniz",
            "current_password.current_password" => "Girdiğiniz Parola Mevcut Parolanızla Eşleşmiyor",
            "password.required"                 => "Parola Alanı Boş Geçilemez",
            "password.confirmed"                => "Parola ve Parola Onayla Değerleri Eşleşmiyor",
            "password.min"                      => "Parola En Az 8 Karakterden Oluşabilir"
        ];
    }
}
