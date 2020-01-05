<?php

namespace App;
use App\Reservation;
use App\Member;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Tourgroup extends Model
{
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
    public function tourcase()
    {
        return $this->belongsTo(Tourcase::class);
    }

}
