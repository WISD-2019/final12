<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourgroup extends Model
{
    public function adoption_application()
    {
        return $this->hasOne(Reservation::class);
    }
}
