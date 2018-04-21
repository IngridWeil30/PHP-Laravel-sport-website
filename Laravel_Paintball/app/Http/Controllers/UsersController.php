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
    public function findUser(Request $request) {
        $user = User::get()->where('email', $request['email'])->first();
        if (isset($user['email'])) {
            return view('manageUser')->with('user', $user);
        } else {
            Session::flash('wrongEmail', "Email doesn't exist");
            return redirect("/admin/match");
        }
    }

    public function editUserAdmin (Request $request, $id) {
        $user = User::find($id);
        if ($request['password'] != $request['password_confirmation']) {
            Session::flash('wrongPassword', "Password do not match password confirmation");
            return redirect("/admin/match");

        } else {
            $user->update([
                'email' => $request['email'],
                'name' => $request['name'],
                'password' => bcrypt($request['password']),
                'is_admin' => $request['is_admin']
            ]);
            Session::flash('infoUpdated', "User info updated");
            return redirect("/admin/match");
        }
    }

    public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();
        Session::flash('userDeleted', "User deleted");
        return redirect("/admin/match");
    }

    public function addUser(Request $request) {
        if ($request['password'] != $request['password_confirmation']) {
            Session::flash('wrongPassword', "Password do not match password confirmation");
            return redirect("/admin/match");

        } else {
            User::create([
                'email' => $request['email'],
                'name' => $request['name'],
                'password' => bcrypt($request['password']),
                'is_admin' => $request['is_admin']
            ]);
            Session::flash('userCreated', "User created");
            return redirect("/admin/match");
        }

    }

    public function myInfo (Guard $auth) {
        $user = $auth->user();
        return view('myInfo')->with('user', $user);

    }

    public function editUser (Guard $auth, Request $request) {
        $user = User::find($auth->user()->id);
        if ($request['password'] != $request['password_confirmation']) {
            Session::flash('wrongPassword', "Password do not match password confirmation");
            return $this->myInfo($auth);

        } else {
            $user->update([
                'email' => $request['email'],
                'name' => $request['name'],
                'password' => bcrypt($request['password'])
            ]);
            Session::flash('infoUpdated', "Your profile is updated");
            return $this->myInfo($auth);
        }
    }

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
