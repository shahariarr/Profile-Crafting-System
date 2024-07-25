<?php

namespace App\Http\Controllers;

use App\Models\ContactData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class ContactDataController extends Controller
{
    public function create()
    {
        $contactData = ContactData::where('user_id', auth()->id())->first();

        if ($contactData !== null) {
            return redirect()->route('contact-data.edit')->with('error', 'Contact data already exists. You can only edit it.');
        }

        return view('UserProfile.contact_data.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'about' => 'required|string|max:2000',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'address' => 'required|string|max:500',
                'linkedin' => 'nullable|url|max:255',
                'github' => 'nullable|url|max:255',
                'facebook' => 'nullable|url|max:255',
            ]);

            $user = Auth::user();

            $contactData = ContactData::where('user_id', auth()->id())->first();

            if ($contactData !== null) {
                return redirect()->route('contact-data.edit')->with('error', 'Contact data already exists. You can only edit it.');
            }

            $contactData = new ContactData();
            $contactData->user_id = $user->id;
            $contactData->title = $request->title;
            $contactData->about = $request->about;
            $contactData->phone = $request->phone;
            $contactData->email = $request->email;
            $contactData->address = $request->address;
            $contactData->linkedin = $request->linkedin;
            $contactData->github = $request->github;
            $contactData->facebook = $request->facebook;
            $contactData->save();

            return redirect()->route('contact-data.edit')->with('success', 'Contact data created successfully.');
        } catch (Exception $e) {
            return redirect()->route('contact-data.create')->with('error', $e->getMessage());
        }
    }

    public function edit()
    {
        try {
            $contactData = ContactData::where('user_id', auth()->id())->first();

            if (!$contactData) {
                return redirect()->route('contact-data.create');
            }

            return view('UserProfile.contact_data.edit', compact('contactData'));
        } catch (Exception $e) {
            return redirect()->route('contact-data.create')->with('error', 'An error occurred while retrieving your contact data.');
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'about' => 'required|string|max:2000',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'address' => 'required|string|max:500',
                'linkedin' => 'nullable|url|max:255',
                'github' => 'nullable|url|max:255',
                'facebook' => 'nullable|url|max:255',
            ]);

            $contactData = ContactData::where('user_id', auth()->id())->first();

            if (!$contactData) {
                return redirect()->route('contact-data.create')->with('error', 'Contact data does not exist. Please create it first.');
            }

            $contactData->title = $request->title;
            $contactData->about = $request->about;
            $contactData->phone = $request->phone;
            $contactData->email = $request->email;
            $contactData->address = $request->address;
            $contactData->linkedin = $request->linkedin;
            $contactData->github = $request->github;
            $contactData->facebook = $request->facebook;
            $contactData->save();

            return redirect()->route('contact-data.edit')->with('success', 'Contact data updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('contact-data.edit')->with('error', 'An error occurred while updating your contact data.');
        }
    }
}
