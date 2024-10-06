<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getAllProfiles()
    {
        $profiles = Profile::all();
        return view('profiles', ['profiles' => $profiles]);
    }

    public function showProfile($id)
    {
        // Fetch the profile by ID
        $profile = Profile::findOrFail($id);

        // Pass the profile data to the view
        return view('profile', ['profile' => $profile]);
    }
}
