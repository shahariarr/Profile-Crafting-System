<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class ProfileController extends Controller
{
    public function edit()
    {
        try {
            $profile = Profile::where('user_id', auth()->id())->first();

            if (!$profile) {
                return redirect()->route('profile.create');
            }

            return view('UserProfile.profile.edit', compact('profile'));
        } catch (Exception $e) {
            return redirect()->route('profile.create')->with('error', 'An error occurred while retrieving your profile.');
        }
    }

    public function create()
    {
        try {
            $profile = Profile::where('user_id', auth()->id())->first();

            if ($profile !== null) {
                return redirect()->route('profile.edit')->with('error', 'Profile already exists. You can only edit it.');
            }

            return view('UserProfile.profile.create');
        } catch (Exception $e) {
            return redirect()->route('profile.edit')->with('error', 'An error occurred while creating your profile.');
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'age' => 'required|integer',
                'nationality' => 'required|string|max:255',
                'freelance' => 'required|boolean',
                'languages' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);


            $user = Auth::user();

            $profile = Profile::where('user_id', auth()->id())->first();

            if ($profile !== null) {
                return redirect()->route('profile.edit')->with('error', 'Profile already exists. You can only edit it.');
            }

            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->first_name = $request->first_name;
            $profile->last_name = $request->last_name;
            $profile->age = $request->age;
            $profile->nationality = $request->nationality;
            $profile->freelance = $request->freelance;
            $profile->languages = $request->languages;

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $profile->image = $imageName;
            }

            $profile->save();

            return redirect()->route('profile.edit')->with('success', 'Profile created successfully.');
        } catch (Exception $e) {
            return redirect()->route('profile.create')->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {

            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'age' => 'required|integer',
                'nationality' => 'required|string|max:255',
                'freelance' => 'required|boolean',
                'languages' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $profile = Profile::where('user_id', auth()->id())->first();

            if (!$profile) {
                return redirect()->route('profile.create')->with('error', 'Profile does not exist. Please create one first.');
            }

            $profile->first_name = $request->first_name;
            $profile->last_name = $request->last_name;
            $profile->age = $request->age;
            $profile->nationality = $request->nationality;
            $profile->freelance = $request->freelance;
            $profile->languages = $request->languages;

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $profile->image = $imageName;
            }

            $profile->save();

            return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('profile.edit')->with('error', $e->getMessage());
        }
    }
}
