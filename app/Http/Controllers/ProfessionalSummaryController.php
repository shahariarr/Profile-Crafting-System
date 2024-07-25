<?php

namespace App\Http\Controllers;

use App\Models\ProfessionalSummary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class ProfessionalSummaryController extends Controller
{
    public function create()
    {
        $summary = ProfessionalSummary::where('user_id', auth()->id())->first();

        if ($summary !== null) {
            return redirect()->route('professional-summary.edit')->with('error', 'Professional summary already exists. You can only edit it.');
        }

        return view('UserProfile.professional_summary.create');
    }

    public function store(Request $request)
    {

        try {
        $request->validate([
            'about_me' => 'required|string|max:5000',
        ]);


            $user = Auth::user();

            $summary = ProfessionalSummary::where('user_id', auth()->id())->first();

            if ($summary !== null) {
                return redirect()->route('professional-summary.edit')->with('error', 'Professional summary already exists. You can only edit it.');
            }

            $summary = new ProfessionalSummary();
            $summary->user_id = $user->id;
            $summary->about_me = $request->about_me;
            $summary->save();

            return redirect()->route('professional-summary.edit')->with('success', 'Professional summary created successfully.');
        } catch (Exception $e) {

            return redirect()->route('professional-summary.create')->with('error', $e->getMessage());
        }
    }

    public function edit()
    {
        try {
            $summary = ProfessionalSummary::where('user_id', auth()->id())->first();

            if (!$summary) {
                return redirect()->route('professional-summary.create');
            }

            return view('UserProfile.professional_summary.edit', compact('summary'));
        } catch (Exception $e) {
            return redirect()->route('professional-summary.create')->with('error', 'An error occurred while retrieving your professional summary.');
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'about_me' => 'required|string|max:5000',
        ]);

        try {
            $summary = ProfessionalSummary::where('user_id', auth()->id())->first();

            if (!$summary) {
                return redirect()->route('professional-summary.create')->with('error', 'Professional summary does not exist. Please create one first.');
            }

            $summary->about_me = $request->about_me;
            $summary->save();

            return redirect()->route('professional-summary.edit')->with('success', 'Professional summary updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('professional-summary.edit')->with('error', 'An error occurred while updating your professional summary.');
        }
    }
}

