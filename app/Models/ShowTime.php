<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
    use HasFactory;
    protected $table='show_time';
    protected $fillable=['movie_id','timeslot_id','show_date','income',
'taken','available'];
public function movies(){
    return $this->belongsTo(Movie::class);
  }
  public function movie(){
    return $this->belongsTo(Movie::class);
  }
  public function timeslots(){
    return $this->belongsTo(Timeslots::class);
  }

  public function timeslot(){
    return $this->belongsTo(Timeslots::class);
  }
}
