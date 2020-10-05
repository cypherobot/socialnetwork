<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //Profile functions
    public function about()
    {
        $user = auth()->user();
        return view('profile.about', compact('user'));
    }

    public function main()
    {
        $user = auth()->user();
        return view('profile.main', compact('user'));
    }

    public function photos()
    {
        $user = auth()->user();
        return view('profile.photos', compact('user'));
    }

    public function friends()
    {
        $user = auth()->user();
        return view('profile.friends', compact('user'));
    }

    public function feed()
    {
        $user = auth()->user();
        return view('profile.feed', compact('user'));
    }

    public function settings()
    {
        $user = auth()->user();
        return view('profile.settings', compact('user'));
    }
}
