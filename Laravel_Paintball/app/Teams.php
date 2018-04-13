<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $fillable = ['name', 'nb_players', 'country_origin', 'coach', "nb_victories", "total_points", "weapon"];
    protected $table = 'teams';

    public function matches() {
        return $this->hasMany('App\Matches');
    }

}
