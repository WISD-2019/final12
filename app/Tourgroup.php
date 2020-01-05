<?php

namespace App;

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
