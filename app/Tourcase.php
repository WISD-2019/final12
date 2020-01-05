<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourcase extends Model
{
    protected $fillable = ['tourname'];

    public function staffs()
    {
        return $this->belongsTo(Staff::class);
    }
}
