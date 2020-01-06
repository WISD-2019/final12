<?php

namespace App;

use App\Reservation;
use App\Member;
use App\Tourgroup;
use App\Staff;
use App\Users;
use Illuminate\Database\Eloquent\Model;

class Tourcase extends Model
{
    protected $fillable = ['tourname'];

    public function staffs()
    {
        return $this->belongsTo(Staff::class);
    }
}
