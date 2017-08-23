<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    public function badge()
    {
    	return $this->belongsTo(User::class);
    }

}
