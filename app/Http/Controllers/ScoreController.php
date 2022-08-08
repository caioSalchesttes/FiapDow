<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function store(Request $request)
    {
        Members::where('hash', $request->hash)->first()->score()->create([
            'points' => 1,
        ]);
    }
}
