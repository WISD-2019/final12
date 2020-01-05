<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tourcase()
    {
        return $this->hasMany(Tourcase::class);
    }

}
