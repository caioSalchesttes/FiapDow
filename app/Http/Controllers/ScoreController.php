<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Teams;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function store(Request $request)
    {
        Members::where('hash', $request->hash)->first()->score()->create([
            'points' => 1,
        ]);
    }

    public function new(Request $request)
    {
        Teams::firstOrCreate([
            'name' => 'beta',
        ]);

        Members::create([
            'name' => $request->name,
            'team_id' => 1,
            'hash' => $request->hash,
        ]);
    }
}
