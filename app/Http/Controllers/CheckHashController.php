<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;

class CheckHashController extends Controller
{
    public function index()
    {
        return view('checkHash');
    }

    public function show()
    {
        $hash = request('hash');
        $data = Vote::where('hash', $hash)->firstOrFail();

        return view('hash', [
            'data' => $data,
        ]);
    }
}
