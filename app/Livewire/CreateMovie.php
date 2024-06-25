<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;

class CreateMovie extends Component
{
    public $title;
    public $showTagModal=false;
    public function closeCreateModel(){
        $this->showTagModal=false;
    }

    public function createMovie(){
        Movie::create([
            'title'=>$this->title
            
        ]);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.create-movie',
    );
    }
}
