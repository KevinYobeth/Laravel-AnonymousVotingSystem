<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Vote;
use App\Userdata;

class VotedController extends Controller
{
    public function index()
    {
        return redirect('/');
    }

    public function store(Request $request)
    {
        $vote = new Vote;
        $vote->hash = Hash::make('hashme');
        $vote->vote = $request->input('balon');
        $identification = $request->session()->get('identification');

        $userdata = Userdata::where('identification', $identification)->firstOrFail();
        $userdata->voted = '1';

        $userdata->save();
        $vote->save();

        return view('voted', [
            'data' => $vote,
            'identification' => $identification,
        ]);
    }
}
