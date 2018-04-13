<?php

namespace App\Http\Controllers;

use App\Matches;
use App\Teams;
use Illuminate\Http\Request;

class matchesController extends Controller
{
    public function addMatch(Request $request) {

        Matches::create($request->all());
        return redirect('admin');

    }

    public function findMatch(Request $request) {

        $match = Matches::get()->where('team1', $request['team1'])->where('team2', $request['team2']);
        if (isset($match[0]['team1'])) {
            var_dump($match);
        } else {
            $match = Matches::get()->where('team2', $request['team1'])->where('team1', $request['team2']);
            if (isset($match[0]['team1'])) {
                var_dump($match);
            } else {
                $message = "Match doesn't exist<br>";
                $teams = Teams::pluck('name', 'id');
                return view('admin')->with('teams', $teams)->with('message', $message);
            }
        }
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

    public function displayAllMatches() {
        $matches = Matches::get();
        return view('matches')->with('matches', $matches);
    }

    public function show($id)
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
