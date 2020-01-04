<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourgroup extends Model
{
    public function reservation()
    {
        return $this->hasOne(Reservation::class);
    }
    public function tourcase()
    {
        return $this->hasOne(Tourcase::class);
    }

}
