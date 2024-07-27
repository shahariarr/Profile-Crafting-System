<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {

        return redirect()->back()->with('success', 'Payment processed successfully!');
    }
}

