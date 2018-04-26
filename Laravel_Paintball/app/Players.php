<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $fillable = ['name', 'nickname', 'age', 'team_id'];
    protected $table = 'players';
}
