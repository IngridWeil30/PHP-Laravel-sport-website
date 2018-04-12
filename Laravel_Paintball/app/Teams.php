<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $fillable = ['name', 'nb_players', 'country_origin', 'coach', "nb_victories", "total_points", "weapon"];
    public function matches() {
        return $this->hasMany('App\Matches');
    }

}
