<?php

namespace App\Livewire\Seatingplan;

use Livewire\Component;

class Show extends Component
{
    public function goToBooking(){
        return redirect()->to('/admin/tickets');
    }
    public function goToSeating(){
        dd('Hey');
    }
    public function render()
    {
        return view('livewire.seatingplan.show');
    }
}
