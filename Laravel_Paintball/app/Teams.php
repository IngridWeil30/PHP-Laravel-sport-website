<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $fillable = ['name', 'nb_players', 'country_origin', 'coach', 'nb_victories', 'total_points', 'weapon', 'country_flag', 'ranking'];
    protected $table = 'teams';

    public function matches() {
        return $this->hasMany('App\Matches');
    }

}
