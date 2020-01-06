<?php

namespace App;
use App\Reservation;
use App\Member;
use App\Tourgroup;
use App\User;
use App\Tourcase;
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
