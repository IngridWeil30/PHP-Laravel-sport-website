<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class matchesController extends Controller
{
    public function viewMatches() {
        return view('matches');
    }
}
