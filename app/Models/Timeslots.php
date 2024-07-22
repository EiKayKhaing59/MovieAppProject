<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeslots extends Model
{
    use HasFactory;
    protected $table='timeslots';
    protected $fillable=['day','start_time'];
    public function ticket(){
        return $this->hasMany(Ticket::class);
    }
    public function showTime(){
        return $this->hasMany(ShowTime::class);
    }
}
