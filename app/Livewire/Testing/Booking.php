<?php

namespace App\Livewire;
use App\Models\Movie;

use Livewire\Component;

class Booking extends Component
{
    public function booking(){
        return redirect()->to('/admin/booking-detail');
    }
    public function render()
    {
        return view('livewire.booking',
        ['movies' => Movie::paginate(100),]);
    }
}
