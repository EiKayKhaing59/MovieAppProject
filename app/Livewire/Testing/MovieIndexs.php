<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Movie;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Http;

class MovieIndexs extends Component
{

    public $last_updated_at = '';

    use WithPagination;
    protected $key = '0bcb7207a6b62c70d6e4b2c15e63bc0b';
    public $movieTMDBId;
    public $movieName;
    public $moviePosterPath;
   public $movie;
    public $modalId;
    public $showTagModal = false;
    public function showCreateModal()
    {
        $this->showTagModal = true;
    }
    protected $rules = [
        'tmdb_id' => 'required',
        'title' => 'required',
        'overview' => 'required',
        'release_date' => 'required',
        'runtime' => 'required',
        'poster_path' => 'required',
        'last_updated_at' => 'required',
    ];
    public function detail($movieId)
    {
        
        return redirect()->to('/admin/details');
    }
    public function generateMovie()
    {

        $newMovie = Http::get('https://api.themoviedb.org/3/movie/' . $this->movieTMDBId . '?api_key=0bcb7207a6b62c70d6e4b2c15e63bc0b')
            ->json();

        $movie = Movie::where('tmdb_id', $newMovie['id'])->first();
        if (!$movie) {
            Movie::create([
                'tmdb_id' => $newMovie['id'],
                'title' => $newMovie['title'],
                'overview' => $newMovie['overview'],
                'release_date' => $newMovie['release_date'],
                'runtime' => $newMovie['runtime'],
                'poster_path' => $newMovie['poster_path'],
                'last_updated_at' => $newMovie['release_date'],

            ]);
            return redirect()->to('/admin/movies');
        } else {
        }
    }
    public function delete($movieId)
    {
        Movie::find($movieId)->delete();
    }
    public function showeditModal($modalId)
    {
        $this->modalId = $modalId;
        $this->showTagModal = true;
    }

    public function render()
    {
        return view(
            'livewire.movie-indexs',
            ['movies' => Movie::paginate(100)]
        );
    }
}
