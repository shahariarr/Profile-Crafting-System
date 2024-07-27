<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function create()
    {
        $education = Education::where('user_id', Auth::id())->first();
        if ($education) {
            return redirect()->route('education.edit')->with('error', 'Education details already exist. You can only edit them.');
        }

        return view('UserProfile.education.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'education' => 'required|array',
            'education.*.title' => 'required|string|max:255',
            'education.*.duration' => 'required|string|max:255',
            'education.*.institution' => 'required|string|max:255',
        ]);

        foreach ($request->education as $educationData) {
            Education::create([
                'user_id' => Auth::id(),
                'title' => $educationData['title'],
                'duration' => $educationData['duration'],
                'institution' => $educationData['institution'],
            ]);
        }

        return redirect()->route('education.edit')->with('success', 'Education details added successfully');
    }

    public function edit()
    {
        $educations = Education::where('user_id', Auth::id())->get();
        return view('UserProfile.education.edit', compact('educations'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'education' => 'required|array',
            'education.*.title' => 'required|string|max:255',
            'education.*.duration' => 'required|string|max:255',
            'education.*.institution' => 'required|string|max:255',
        ]);

        $updatedIds = [];
        foreach ($request->education as $key => $educationData) {
            if (strpos($key, 'new') === 0) {
                $newEducation = Education::create([
                    'user_id' => Auth::id(),
                    'title' => $educationData['title'],
                    'duration' => $educationData['duration'],
                    'institution' => $educationData['institution'],
                ]);
                $updatedIds[] = $newEducation->id;
            } else {
                $education = Education::where('user_id', Auth::id())->findOrFail($key);
                $education->update([
                    'title' => $educationData['title'],
                    'duration' => $educationData['duration'],
                    'institution' => $educationData['institution'],
                ]);
                $updatedIds[] = $education->id;
            }
        }

        Education::where('user_id', Auth::id())->whereNotIn('id', $updatedIds)->delete();

        return redirect()->route('education.edit')->with('success', 'Education details updated successfully');
    }
}
