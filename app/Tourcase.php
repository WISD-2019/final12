<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourcase extends Model
{
    public function tourcase()
    {
        return $this->hasMany(Tourcase::class);
    }
}
