<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $primaryKey = 'name';
    public $incrementing = false;

    public function players()
    {
        return $this->hasMany(Player::class, 'position');
    }
}
