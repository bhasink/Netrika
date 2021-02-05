<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;

class Quotes extends Model
{
    public function get_all_team(){

        $get_all_team = Team::all();
        return $get_all_team;
    }
}
