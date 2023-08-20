<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordUpdateRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        return view("admin.profile.index", compact("user"));
    }

    public function updateProfile(ProfileUpdateRequest $request)
    {
        $user = Auth::user();
        $imagePath = handleUpload("image", $user, "user");

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
            'Profil Başarıyla Güncellendi',
            "Başarılı",
            ['timeout' => 5000, 'position' => 'top-center']) :
            flash()->addError(
                'Profil Güncelleme Başarısız Sonuçlandı',
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
                'Parola Başarıyla Güncellendi',
                "Başarılı",
                ['timeout' => 5000, 'position' => 'top-center']) :
            flash()->addError(
                'Parola Güncelleme Başarısız Sonuçlandı',
                "Başarısız",
                ['timeout' => 5000, 'position' => 'top-center']);

        return redirect()->back();
    }
}
