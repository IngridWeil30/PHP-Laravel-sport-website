<?php

namespace App\Http\Controllers;

use App\Matches;
use Illuminate\Http\Request;

class matchesController extends Controller
{
    public function viewMatches() {

        return view('matches')->with('matches', $matches);
    }

    public function addMatch(Request $request) {

        $data = Matches::create($request->all());
        var_dump($data);

    }
}
