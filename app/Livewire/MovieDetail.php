<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Movie;
use Livewire\WithPagination;
use App\Livewire\MovieIndex;
use App\Models\Customers;
class MovieDetail extends Component
{
    public function render()
    {
        return view('livewire.movie-detail',
        ['movies' => Movie::orderBy('updated_at','desc')->get(),
        'customers'=>Customers::paginate(100),]
    );
        
    }
}
