<?php

namespace App\Http\Controllers;

use App\Matches;
use App\Teams;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class matchesController extends Controller

{
    public function addMatch(Request $request) {

        Matches::create($request->all());
        Session::flash('matchCreated', "Match created");
        return redirect("/admin/match");
    }

    public function findMatch(Request $request) {
        $teams = Teams::pluck('name', 'id');
        $match = Matches::with('teams')->get()->where('team1', $request['team1'])->where('team2', $request['team2'])->first();
        if (isset($match['team1'])) {
            return view('manageMatch')->with('match', $match)->with('teams', $teams);
        } else {
            $match = Matches::get()->where('team2', $request['team1'])->where('team1', $request['team2']);
            if (isset($match['team1'])) {
                return view('manageMatch')->with('match', $match)->with('teams', $teams);
            } else {
                $message = "Match doesn't exist<br>";
                return view('admin')->with('teams', $teams)->with('message', $message);
            }
        }
    }

    public function deleteMatch($id) {
        $match = Matches::find($id);
        $teams = Teams::pluck('name', 'id');
        $match->delete();
        $message = "Match deleted";
        return view('admin')->with('teams', $teams)->with('message', $message);
    }

    public function editMatch(Request $request, $data) {
        $teams = Teams::pluck('name', 'id');
        $match = Matches::find($data);
        $match->update([
            'winner' => $request['winner'],
            'scoreTeam1' => $request['scoreTeam1'],
            'scoreTeam2' => $request['scoreTeam2'],
            'city' => $request['city'],
            'description' => $request['description'],
            'matchStatus' => $request['matchStatus'],
            'team1' => $request['team1'],
            'team2' => $request['team2']
        ]);
        if ($request['matchStatus'] == 1) {
            $team1 = Teams::find($request['team1']);
            $score1 = $request['scoreTeam1'] + $team1->total_points;
            $team1->update(['total_points' => $score1]);
            $team2 = Teams::find($request['team2']);
            $score2 = $request['scoreTeam2'] + $team2->total_points;
            $team2->update(['total_points' => $score2]);

        }
        $message = "Match updated";
        return view('admin')->with('teams', $teams)->with('message', $message);
    }

    public function manageMatch() {
        return view('manageMatch');
    }

    public function displayAllMatches(Guard $auth) {
        $teams = Teams::pluck('name', 'id');
        $matches = Matches::get();
        return view('matches')->with('matches', $matches)->with('teams', $teams);
    }

    public function displayMatch($id)
    {

        $matches = Matches::find($id);
        //$matches = Matches::get()->where('id', $id)->first();
        return view('matches')->with('matches', $matches);
    }
}
