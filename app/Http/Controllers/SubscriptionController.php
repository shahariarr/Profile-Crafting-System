<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SubscriptionController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $subscription = $user->subscription;

        return view('UserProfile.subscriptions.index', compact('subscription'));
    }

    public function create()
    {
        return view('UserProfile.subscriptions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:free,pro,premium',
            'plan' => 'required|in:monthly,yearly,lifetime',
        ]);

        $user = Auth::user();
        $start_date = Carbon::now();
        $end_date = null;

        if ($request->type !== 'free') {
            switch ($request->plan) {
                case 'monthly':
                    $end_date = $start_date->copy()->addMonth();
                    break;
                case 'yearly':
                    $end_date = $start_date->copy()->addYear();
                    break;
                case 'lifetime':
                    $end_date = null;
                    break;
            }
        }

        Subscription::create([
            'user_id' => $user->id,
            'type' => $request->type,
            'plan' => $request->plan,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ]);

        return redirect()->route('subscriptions.index')->with('success', 'Subscription created successfully');
    }

    public function edit($id)
    {
        $subscription = Subscription::where('user_id', Auth::id())->findOrFail($id);

        return view('UserProfile.subscriptions.edit', compact('subscription'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|in:free,pro,premium',
            'plan' => 'required|in:monthly,yearly,lifetime',
        ]);

        $subscription = Subscription::where('user_id', Auth::id())->findOrFail($id);
        $start_date = Carbon::now();
        $end_date = null;

        if ($request->type !== 'free') {
            switch ($request->plan) {
                case 'monthly':
                    $end_date = $start_date->copy()->addMonth();
                    break;
                case 'yearly':
                    $end_date = $start_date->copy()->addYear();
                    break;
                case 'lifetime':
                    $end_date = null;
                    break;
            }
        }

        $subscription->update([
            'type' => $request->type,
            'plan' => $request->plan,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ]);

        return redirect()->route('subscriptions.index')->with('success', 'Subscription updated successfully');
    }
}
