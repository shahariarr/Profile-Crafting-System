<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    public function create()
    {
        $experience = Experience::where('user_id', Auth::id())->first();
        if ($experience) {
            return redirect()->route('experience.edit')->with('error', 'Experience details already exist. You can only edit them.');
        }

        return view('UserProfile.experience.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'experience' => 'required|array',
            'experience.*.title' => 'required|string|max:255',
            'experience.*.company' => 'required|string|max:255',
            'experience.*.duration' => 'required|string|max:255',
        ]);

        foreach ($request->experience as $experienceData) {
            Experience::create([
                'user_id' => Auth::id(),
                'title' => $experienceData['title'],
                'company' => $experienceData['company'],
                'duration' => $experienceData['duration'],
            ]);
        }

        return redirect()->route('experience.edit')->with('success', 'Experience details added successfully');
    }

    public function edit()
    {
        $experiences = Experience::where('user_id', Auth::id())->get();
        return view('UserProfile.experience.edit', compact('experiences'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'experience' => 'required|array',
            'experience.*.title' => 'required|string|max:255',
            'experience.*.company' => 'required|string|max:255',
            'experience.*.duration' => 'required|string|max:255',
        ]);

        foreach ($request->experience as $id => $experienceData) {
            if (str_starts_with($id, 'new')) {
                Experience::create([
                    'user_id' => Auth::id(),
                    'title' => $experienceData['title'],
                    'company' => $experienceData['company'],
                    'duration' => $experienceData['duration'],
                ]);
            } elseif (isset($experienceData['delete']) && $experienceData['delete'] == '1') {
                Experience::where('user_id', Auth::id())->findOrFail($id)->delete();
            } else {
                $experience = Experience::where('user_id', Auth::id())->findOrFail($id);
                $experience->update([
                    'title' => $experienceData['title'],
                    'company' => $experienceData['company'],
                    'duration' => $experienceData['duration'],
                ]);
            }
        }

        return redirect()->route('experience.edit')->with('success', 'Experience details updated successfully');
    }
}
