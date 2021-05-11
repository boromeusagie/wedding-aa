<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
