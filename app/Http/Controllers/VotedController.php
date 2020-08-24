<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotedController extends Controller
{
    public function index()
    {
        return redirect('/');
    }

    public function store()
    {
        return view('voted');
    }
}
