<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Movie;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Http;

class MovieIndex extends Component
{
    use WithPagination;
    protected $key='0bcb7207a6b62c70d6e4b2c15e63bc0b';
    public $movieTMDBId;
    public $movieName;
    public $moviePosterPath;

    public $showTagModal=false;
    public function showCreateModal(){
        $this->showTagModal=true;
    }

    public function generateMovie(){
       $newMovie= Http::get('https://api.themoviedb.org/3/account/21332248/favorite/movies')
        ->json();
        Movie::create([
            'tmdb_id'=>$newMovie['id'],
            'name' => $newMovie['name'],
            'poster_path' =>$newMovie['poster_path'],
        ]);
    }
    public function render()
    {
        return view('livewire.movie-index',
    ['movies' => Movie::paginate(5),]);
    }
}
