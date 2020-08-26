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

    public function download(string $hash)
    {
        $txt = $hash . "\n KEEP THIS SAFE";

        //offer the content of txt as a download (logs.txt)
        return response($txt)
            ->withHeaders([
                'Content-Type' => 'text/plain',
                'Cache-Control' => 'no-store, no-cache',
                'Content-Disposition' => 'attachment; filename="hash.txt',
            ]);
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

        $this->download($vote->hash);

        return view('voted', [
            'data' => $vote,
            'identification' => $identification,
        ]);
    }
}
