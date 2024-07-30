<?php

namespace App\Livewire;

use App\Models\Timeslots;
use Livewire\Component;

class TimeIndex extends Component
{
    
    public function showCreateTime(){
        return redirect()->to('/admin/create-time');
    }
    public function delete($timeslotsId){
        Timeslots::find($timeslotsId)->delete();
        return redirect()->to('/admin/time');
    }
    public function render()
    {
        return view('livewire.time-index',
        ['timeslots' => Timeslots::paginate(20),]);
    }

    
}
