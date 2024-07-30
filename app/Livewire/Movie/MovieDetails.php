<?php

namespace App\Livewire\Movie;

use App\Models\Movie;
use Livewire\Component;

class MovieDetails extends Component
{
    public $movie;
    public function mount($id){
        $this->movie=Movie::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.movie.movie-details',['movie'=>$this->movie]);
    }
}
