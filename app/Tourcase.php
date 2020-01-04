<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourcase extends Model
{
    public function tourgroup()
    {
        return $this->belongsTo(Tourgroup::class);
    }
}
