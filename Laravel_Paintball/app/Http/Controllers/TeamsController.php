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
    public function show($id)
    {
        //
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
