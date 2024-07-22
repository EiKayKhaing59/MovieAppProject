<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;
    protected $table='bookings';
    protected $fillable=['customer_id','movie_id','timeslot_id','show_date','total_price'];
    public function customers(){
      return $this->belongsTo(Customers::class);
    }
    public function movies(){
      return $this->belongsTo(Movie::class);
    }
    public function timeslots(){
      return $this->belongsTo(Timeslots::class);
    }
    public function customer(){
      return $this->belongsTo(Customers::class);
    }
    public function movie(){
      return $this->belongsTo(Movie::class);
    }
    public function timeslot(){
      return $this->belongsTo(Timeslots::class);
    }
}
