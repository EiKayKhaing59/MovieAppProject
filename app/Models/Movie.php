<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $tmdb_id='';
    protected $fillable=['tmdb_id','title','overview','poster_path'
    ,'release_date','runtime','last_updated_at'];
}
