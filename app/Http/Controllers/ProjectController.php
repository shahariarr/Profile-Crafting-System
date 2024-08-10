<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function create()
    {
        $projects = Project::where('user_id', Auth::id())->get();
        if ($projects->isNotEmpty()) {
            return redirect()->route('project.edit')->with('error', 'Project details already exist. You can only edit them.');
        }

        return view('UserProfile.project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'projects' => 'required|array',
            'projects.*.name' => 'required|string|max:255',
            'projects.*.tools' => 'required|string|max:255',
            'projects.*.description' => 'required|string',
            'projects.*.role' => 'required|string|max:255',
            'projects.*.source_code' => 'nullable|url',
            'projects.*.demo' => 'nullable|url',
            'projects.*.image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        foreach ($request->projects as $key => $projectData) {
            $projectData['user_id'] = Auth::id();


            if (isset($projectData['image'])) {
                if (isset($projectData['id'])) {
                    $existingProject = Project::find($projectData['id']);
                    if ($existingProject && $existingProject->image && file_exists(public_path('project_images/' . $existingProject->image))) {
                        unlink(public_path('project_images/' . $existingProject->image));
                    }
                }

                $imageName = time() . '.' . $projectData['image']->extension();
                $projectData['image']->move(public_path('project_images'), $imageName);
                $projectData['image'] = $imageName;
            }

            Project::updateOrCreate(
                ['id' => $key],
                $projectData
            );
        }

        return redirect()->route('project.edit')->with('success', 'Project details added successfully');
    }

    public function edit()
    {
        $projects = Project::where('user_id', Auth::id())->get();
        return view('UserProfile.project.edit', compact('projects'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'projects' => 'required|array',
            'projects.*.name' => 'required|string|max:255',
            'projects.*.tools' => 'required|string|max:255',
            'projects.*.description' => 'required|string',
            'projects.*.role' => 'required|string|max:255',
            'projects.*.source_code' => 'nullable|url',
            'projects.*.demo' => 'nullable|url',
            'projects.*.image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $updatedIds = [];
        foreach ($request->projects as $key => $projectData) {
            if (strpos($key, 'new') === 0) {
                $projectData['user_id'] = Auth::id();

                if (isset($projectData['image'])) {
                    $imageName = time() . '.' . $projectData['image']->extension();
                    $projectData['image']->move(public_path('project_images'), $imageName);
                    $projectData['image'] = $imageName;
                }

                $project = Project::create($projectData);
                $updatedIds[] = $project->id;
            } else {
                $project = Project::where('user_id', Auth::id())->findOrFail($key);

                if (isset($projectData['image'])) {
                    // Delete the old image if a new one is uploaded
                    if ($project->image && file_exists(public_path('project_images/' . $project->image))) {
                        unlink(public_path('project_images/' . $project->image));
                    }

                    $imageName = time() . '.' . $projectData['image']->extension();
                    $projectData['image']->move(public_path('project_images'), $imageName);
                    $projectData['image'] = $imageName;
                }

                $project->update($projectData);
                $updatedIds[] = $project->id;
            }
        }

        // Delete projects not in the updated list
        Project::where('user_id', Auth::id())->whereNotIn('id', $updatedIds)->delete();

        return redirect()->route('project.edit')->with('success', 'Project details updated successfully');
    }
}
