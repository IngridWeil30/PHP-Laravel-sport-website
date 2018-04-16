<?php

namespace App\Http\Controllers;

use App\Matches;
use App\Teams;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
/* PERMET D'AFFICHER EN FONCTION DE LA LANGUE CHOISIR EN URL (EN ou FR)*/
          if($request->lang <> ''){
            app()->setLocale($request->lang);
        }
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

/*    public function displayMatchHome($id=1)
    {
        $matches = Matches::find($id);
        //$matches = Matches::get()->where('id', $id)->first();
        return view('home')->with('matches', $matches);
    }*/

    public function displayTeam1($id=1)
    {
        $teams = Teams::find($id);
        //$matches = Matches::get()->where('id', $id)->first();
        return view('home')->with('teams', $teams);
    }

    public function displayTeam2($id=2)
    {
        $teams = Teams::find($id);
        //$matches = Matches::get()->where('id', $id)->first();
        return view('home')->with('teams', $teams);
    }

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
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
}
