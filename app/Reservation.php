<?php

namespace App;
use App\User;
use App\Member;
use App\Tourgroup;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function tourgroup()
    {
        return $this->hasOne(Tourgroup::class);
    }
}
