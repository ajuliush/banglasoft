<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $foundations = User::get();
        return view('welcome', compact('foundations'));
    }
    public function show($slug)
    {
        $foundation = User::where('slug', $slug)->first();
        return view('details', compact('foundation'));
    }
}
