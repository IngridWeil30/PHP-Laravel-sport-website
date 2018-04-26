<?php

namespace App\Http\Controllers;

use App\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;

class TeamsController extends Controller
{
    public function addTeam(Request $request) {
        $country_origin = Input::get('country_origin');
        $team = Teams::where('country_origin', $country_origin)->get();
        if (isset($team[0])) {
            $message = "Sorry, the team corresponding to this country already exists<br>";
            $teams = Teams::pluck('name', 'id');
            return view('admin')->with('teams', $teams)->with('message', $message);
        } else {
            Teams::create($request->all());
            $message = "Your new team has been registrated<br>";
            $teams = Teams::pluck('name', 'id');
            return view('admin')->with('teams', $teams)->with('message', $message);
        }
    }

    public function findTeam(Request $request)
    {
        $team = Teams::get()->where('id', $request->input('name'))->first();
        //dd($request);
        if (isset($team['name'])) {
            return view('manageTeam')->with('team', $team);
        } else {
            $message = "Team doesn't exist<br>";
            return view('manageTeam')->with('team', $team)->with('message', $message);
        }
    }

    public function editTeam(Request $request, $data) {
        $teams = Teams::pluck('name', 'id');
        $team = Teams::find($data);
        $team->update([
            'name' => $request['name'],
            'nb_players' => $request['nb_players'],
            'country_origin' => $request['country_origin'],
            'coach' => $request['coach'],
            'nb_victories' => $request['nb_victories'],
            'total_points' => $request['total_points'],
            'weapon' => $request['weapon'],
            'country_flag' => $request['country_flag'],
            'ranking' => $request['ranking']
        ]);
        $message = "Team updated";
        return view('admin')->with('teams', $teams)->with('message', $message);
    }

    public function displayAllTeams() {
        $teams = Teams::orderBy('total_points', 'desc')
            ->get();
        $ranking = 1;
       return view('teams')->with('teams', $teams)->with('ranking', $ranking);
    }

    public function displayTeam($id)
    {
        $teams = Teams::find($id);
        return view('teams')->with('teams', $teams);
    }


    public function manageTeam() {
        return view('manageTeam');
    }

    public function deleteTeam($id) {
        $team = Teams::find($id);
        $teams = Teams::pluck('name', 'id');
        $team->delete();
        $message = "Team deleted";
        return view('admin')->with('teams', $teams)->with('message', $message);
    }
}
