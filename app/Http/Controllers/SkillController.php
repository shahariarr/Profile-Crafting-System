<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    public function create()
    {
        $path = storage_path('app/skills.json');
        $skills = json_decode(file_get_contents($path), true);

        $userSkills = Skill::where('user_id', Auth::id())->pluck('name')->toArray();
        $existingSkill = Skill::where('user_id', Auth::id())->first();
        if ($existingSkill !== null) {
            return redirect()->route('skills.edit')->with('error', 'You already have skills.If you want to add your new skill then you can edit it');
        }

        return view('UserProfile.skills.create', compact('skills', 'userSkills'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'skills' => 'required|array',
        ]);

        // Ensure the user does not already have skills
        $existingSkill = Skill::where('user_id', Auth::id())->first();
        if ($existingSkill !== null) {
            return redirect()->route('skills.edit')->with('error', 'You already have skills.');
        }

        foreach ($request->skills as $skillName) {
            Skill::create([
                'name' => $skillName,
                'user_id' => Auth::id()
            ]);
        }

        return redirect()->route('skills.edit')->with('success', 'Skills added successfully');
    }

    public function edit()
    {
        $path = storage_path('app/skills.json');
        $skills = json_decode(file_get_contents($path), true);

        $userSkills = Skill::where('user_id', Auth::id())->pluck('name')->toArray();

        return view('UserProfile.skills.edit', compact('skills', 'userSkills'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'skills' => 'required|array',
        ]);

        // Remove all existing skills for the user
        Skill::where('user_id', Auth::id())->delete();

        // Add the new set of skills
        foreach ($request->skills as $skillName) {
            Skill::create([
                'name' => $skillName,
                'user_id' => Auth::id()
            ]);
        }

        return redirect()->route('skills.edit')->with('success', 'Skills updated successfully');
    }
}
