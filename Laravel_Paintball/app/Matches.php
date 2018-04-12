<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    protected $fillable = ['team1', 'team2', 'winner', 'scoreTeam1', "scoreTeam2", "city", "description", "matchStatus"];

}
