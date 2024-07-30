<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Http;
class CreateMovie extends Component
{
    protected $fillable=['tmdb_id','title','overview','poster_path'
    ,'release_date','runtime','last_updated_at'];

    use WithPagination;
    protected $key='0bcb7207a6b62c70d6e4b2c15e63bc0b';
    public $movieTMDBId;
    public $movieName;
    public $moviePosterPath;

    public $showTagModal=false;
    public function showCreateModal(){
        $this->showTagModal=true;
    }
    
    
    public function closeCreateModel(){
        $this->showTagModal=false;
    }
     
    public function save(){
        dd('Save');
    }
    public function createNew(){
        Movie::create([
            'title' => $this->title
        ]);
        $this->reset();
    }

    public function generateMovie(){
        $newMovie= Http::get('https://api.themoviedb.org/3/account/21332248/favorite/movies')
         ->json();
         Movie::create([
             'tmdb_id'=>$newMovie['id'],
             'name' => $newMovie['name'],
             'poster_path' =>$newMovie['poster_path'],
             'overview'=>$newMovie['overview'],
         ]);
     }
    public function render()
    {
        return view('livewire.create-movie',
        ['movies' => Movie::paginate(5),]);
    }
}
