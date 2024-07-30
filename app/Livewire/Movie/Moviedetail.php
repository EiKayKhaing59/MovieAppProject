<?php

namespace App\Livewire\Movie;

use Livewire\Component;
use App\Models\Movie;
use App\Models\Customers;
use Illuminate\Support\Facades\Http;

class Moviedetail extends Component
{
    public function video(){
        $newVideo=Http::get('https://api.themoviedb.org/3/movie/297762/videos?api_key=0bcb7207a6b62c70d6e4b2c15e63bc0b')->json();
    }
    
    public function render()
    {
        return view('livewire.movie.moviedetail',
        ['movies' => Movie::orderBy('updated_at','desc')->get(),
        'customers'=>Customers::paginate(100),]);
    }
}
