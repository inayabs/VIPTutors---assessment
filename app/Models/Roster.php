<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    use HasFactory;

    protected $table = 'roster';

    protected $casts = ['id'=>'string'];

    public function player_totals(){
        return $this->hasOne(PlayerTotal::class,'player_id','id');
    }

    public function team(){
        return $this->hasOne(Team::class,'code','team_code');
    }
}
