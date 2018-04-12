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

        Matches::create($request->all());
        return redirect('admin');

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
        //return view('table_matches', 'day' => [$day]);
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
