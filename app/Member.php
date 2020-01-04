<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function adoption_applications()
    {
        return $this->hasMany(Reservation::class);
    }
}
