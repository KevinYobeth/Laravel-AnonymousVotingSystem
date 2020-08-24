<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userdata;

class VoteController extends Controller
{
    public function index()
    {
        return redirect('/');
    }

    public function store()
    {
        $identification = request('identification');
        $userdata = Userdata::where('identification', $identification)->firstOrFail();
        // $userdata = Userdata::findOrFail($identification);

        return view('vote', [
            'userdata' => $userdata,
        ]);
    }
}
