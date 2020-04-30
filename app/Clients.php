<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Orders','client_id');
    }
}
