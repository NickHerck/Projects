<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function club() {
        return $this->belongsTo(Club::class, 'club_name', 'name');
    }

    public function position() {
        return $this->belongsTo(Position::class, 'name', 'position');
    }
}
