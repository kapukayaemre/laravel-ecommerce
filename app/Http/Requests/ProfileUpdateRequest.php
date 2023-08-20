<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "name"     => ["required", "string", "max:50"],
            "surname"  => ["required", "string", "max:50"],
            "username" => ["required", "max:50"],
            "email"    => ["email", "max:50", Rule::unique(User::class)->ignore($this->user()->id)],
            "image"    => ["image", "max:5000"],
            "phone"    => ["max:20"],
            "about"    => ["max:500"]

        ];
    }

    public function messages(): array
    {
        return [
            "name.required"     => "Adınız Alanı Doldurulması Zorunludur",
            "name.string"       => "Adınız Sadece Harflerden Oluşabilir",
            "name.max"          => "Adınız Alanı En Fazla 50 Karakterden Oluşabilir",
            "surname.required"  => "Soyadınız Alanı Doldurulması Zorunludur",
            "surname.string"    => "Soyadınız Sadece Harflerden Oluşabilir",
            "surname.max"       => "Soyadınız Alanı En Fazla 50 Karakterden Oluşabilir",
            "username.required" => "Kullanıcı Adı Alanı Doldurulması Zorunludur",
            "username.max"      => "Kullanıcı Adı Alanı En Fazla 50 Karakterden Oluşabilir",
            "email.email"       => "Email Formatında Giriş Yapınız",
            "email.max"         => "Email Alanı En Fazla 50 Karakterden Oluşabilir",
            "image.image"       => "Profil Resmi Resim Formatında Bir Dosyadan Oluşmalıdır",
            "image.max"         => "Profil Resmi Alanı En Fazla 5 MB Olabilir",
            "phone.max"         => "Telefon Alanı En Fazla 20 Karakterden Oluşabilir"

        ];
    }
}
