<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function getUserWallet(Guard $auth)
    {
        $wallet = $auth->user()->wallet;
        $user = $auth->user();
        return view('users')->with('user', $user)->with('wallet', $wallet);
    }

    public function addToWallet(Guard $auth)
    {
        $user = User::find($auth->user()->id);
        $wallet = $auth->user()->wallet;
        $addToWallet = Input::get('addToWallet');
        if ($addToWallet > 0) {
            $added_money = $wallet + $addToWallet;
            $wallet = $added_money;
            $user->wallet = $wallet;
            $user->save();
            Session::flash('addToWallet', "Your wallet has been updated");
            return redirect('/users');
        } else
            Session::flash('noAddToWallet', "A problem occurred while updating your wallet (please check your added amount)");
        return redirect('/users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
