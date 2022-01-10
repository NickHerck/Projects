<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $primaryKey = 'name';
    public $incrementing = false;

    public function players()
    {
        return $this->hasMany(Player::class, 'club_name');
    }
}
