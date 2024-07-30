<?php

namespace App\Livewire\Seatingplan;

use Livewire\Component;

class Show extends Component
{
    public function goToBooking(){
        return redirect()->to('/admin/booking-create');
    }
    
    public function render()
    {
        return view('livewire.seatingplan.show');
    }
}
