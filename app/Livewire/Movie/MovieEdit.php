<?php

namespace App\Livewire\Movie;

use App\Models\Movie;
use Livewire\Component;

class MovieEdit extends Component
{
    public $title = '';
    public $overview = '';
    public $runtime = '';
    public $poster_path = '';
    public $release_date = '';
    public $movieId;

    public function mount($movieId)
    {
        $this->movieId = $movieId;
        $movie = Movie::find($movieId);
        $this->title = $movie->title;
        $this->overview = $movie->overview;
        $this->poster_path = $movie->poster_path;
        $this->release_date = $movie->release_date;
        $this->runtime = $movie->runtime;
        $this->last_updated_at=$movie->release_date;
    }

    public function save()
    {
        $movie = Movie::find($this->movieId);
        $movie->update([
            'title' => $this->title,
            'overview' => $this->overview,
            'runtime'=>$this->runtime,
            'poster_path'=>$this->poster_path,
            'release_date'=>$this->release_date,
            'last_updated_at' => $this->release_date
        ]);

        return redirect()->to('/admin/movieindex');
    }
    public function render()
    {
        return view('livewire.movie.movie-edit');
    }
}
