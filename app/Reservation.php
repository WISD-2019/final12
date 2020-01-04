<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function tourgroup()
    {
        return $this->belongsTo(Tourgroup::class);
    }
}
