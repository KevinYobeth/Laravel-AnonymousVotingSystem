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

    public function store(Request $request)
    {

        try {
            $identification = request('identification');
            $userdata = Userdata::where('identification', $identification)->firstOrFail();
            $request->session()->put('identification', $identification);

            if ($userdata->voted == 1) return redirect('/')->with('mssg', 'You have already voted');
        } catch (\Throwable $e) {
            return redirect('/')->with('mssg', 'No User Found!');
        }

        return view('vote', [
            'userdata' => $userdata,
        ]);
    }
}
