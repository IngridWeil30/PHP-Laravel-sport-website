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
        return redirect('admin');

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
        $message = "Match updated";
        return view('admin')->with('teams', $teams)->with('message', $message);
    }

    public function manageMatch() {
        return view('manageMatch');
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
