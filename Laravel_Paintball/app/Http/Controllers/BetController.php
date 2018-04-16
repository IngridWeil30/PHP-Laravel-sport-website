<?php

namespace App\Http\Controllers;

use App\Bets;
use App\Matches;
use App\Teams;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class BetController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function newBet($id){
        $teams = Teams::pluck('name', 'id');
        $match = Matches::with('teams')->where('id', $id)->get()->first();
        return view('newBet')->with('match', $match)->with('teams', $teams);
    }

    public function makeBet(Guard $auth, Request $request, $matchId) {
        $newWallet = ($auth->user()->wallet) - ($request->sum);

        if ($auth->user()->wallet >= $request->sum) {
            $userId = $auth->user()->id;
            $bet = new Bets;
            $bet->user_id = $userId;
            $bet->match_id = $matchId;
            $bet->sum = $request->sum;
            $bet->winner_id = $request->winner_id;
            $bet->save();
            $user = User::find($userId);
            $user->update(['wallet' => $newWallet]);
            $this->updateMatch($matchId, $request->sum, $request->winner_id);
            Session::flash('bet_success', "Your new bet is saved, good luck !");
            return $this->newBet($matchId);
        } else {
            Session::flash('no_money', "You don't have enough money in your wallet");
            return $this->newBet($matchId);

        }

    }

    public function updateMatch($matchId, $sum, $winner_id){
        $match = Matches::find($matchId);
        $cashPrize = $match->cashPrize + $sum;
        $match->update(['cashPrize' => $cashPrize]);
        $odds = Bets::get()->where('match_id', $matchId)->where('winner_id', $winner_id);
        $tot = 0;
        foreach($odds as $totalOdds) {
            $tot = $tot + $totalOdds->sum;
        }
        $oddsTeam = $cashPrize / $tot;
        if ($winner_id == $match->team1) {
            $match->update(['oddsTeam1' => $oddsTeam]);
        } else {
            $match->update(['oddsTeam2' => $oddsTeam]);
        }
    }
}
