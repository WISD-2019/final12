<?php

namespace App;
use App\Reservation;
use App\User;
use App\Tourgroup;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
    protected $fillable = [
        'user_id',
        'name',
        'phone',];
}
