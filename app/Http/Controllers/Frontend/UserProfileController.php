<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordUpdateRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index()
    {
        return view("frontend.dashboard.profile");
    }

    public function updateProfile(ProfileUpdateRequest $request)
    {
        $user = Auth::user();
        $imagePath = handleUpload("image", $user, "user-profile");

        $update = User::where("id", $user->id)->update([
            "name"     => $request->input("name"),
            "surname"  => $request->input("surname"),
            "username" => $request->input("username"),
            "email"    => $request->input("email"),
            "image"    => (!empty($imagePath) ? $imagePath : $user->image),
            "phone"    => $request->input("phone"),
            "about"    => $request->input("about")
        ]);

        $update ?
            flash()->addSuccess(
                '<div class="text-white">Profil Başarıyla Güncellendi</div>',
                "Başarılı",
                ['timeout' => 5000, 'position' => 'top-center']) :
            flash()->addError(
                '<div class="text-white">Profil Güncelleme Başarısız Sonuçlandı</div>',
                "Başarısız",
                ['timeout' => 5000, 'position' => 'top-center']);

        return redirect()->back();
    }

    public function updatePassword(PasswordUpdateRequest $request)
    {
        $user = Auth::user();

        $update = User::where("id", $user->id)->update([
            "password" => bcrypt($request->input("password"))
        ]);

        $update ?
            flash()->addSuccess(
                '<div class="text-white">Parola Başarıyla Güncellendi</div>',
                "Başarılı",
                ['timeout' => 5000, 'position' => 'top-center']) :
            flash()->addError(
                '<div class="text-white">Parola Güncelleme Başarısız Sonuçlandı</div>',
                "Başarısız",
                ['timeout' => 5000, 'position' => 'top-center']);

        return redirect()->back();
    }
}
