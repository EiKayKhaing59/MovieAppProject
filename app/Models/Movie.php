<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    
    protected $fillable=['tmdb_id','title','overview','poster_path'
    ,'release_date','runtime','last_updated_at','video'];

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
    public function showTime(){
        return $this->hasMany(ShowTime::class);
    }
}
