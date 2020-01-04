<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function animal()
    {
        return $this->belongsTo(Tourgroup::class);
    }
}
