<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {


        return view('Front_End.main');
    }

}
