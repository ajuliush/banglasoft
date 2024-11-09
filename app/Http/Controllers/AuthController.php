<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerFoundation(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'slug' => Str::slug($validatedData['name']),
        ]);
        return redirect('/login');
    }
    public function login()
    {
        if (!empty(Auth::check())) {
            return redirect('/dashboard');
        }
        return view('login');
    }
    public function AuthLogin(Request $request)
    {
        if (Auth::Attempt(['email' => $request->email, 'password' => $request->password])) {
            $slug = Auth::user()->slug;
            return redirect('/dashboard' . '/' . $slug);
        } else {
            return redirect('/login');
        }
    }
    public function AuthLogo(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $logo = User::find(Auth::user()->id);
        if (!empty($request->image)) {
            // Check if the user already has a logo and delete it
            if ($logo->logo) {
                $existingImagePath = public_path('uploads/logo/' . $logo->logo);
                $existingThumbnailPath = public_path('uploads/logo/thumb/' . $logo->logo);

                // Delete the existing logo and thumbnail if they exist
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
                if (file_exists($existingThumbnailPath)) {
                    unlink($existingThumbnailPath);
                }
            }

            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $image->move(public_path('uploads/logo'), $imageName);
            $logo->logo = $imageName;
            $logo->save();

            $manager = new ImageManager(Driver::class);
            $img = $manager->read(public_path('uploads/logo/' . $imageName));

            $img->resize(990);
            $img->save(public_path('uploads/logo/thumb/' . $imageName));
        }
        return redirect()->back();
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
