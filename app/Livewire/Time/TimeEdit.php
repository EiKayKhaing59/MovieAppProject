<?php

namespace App\Livewire\Time;
use App\Models\Timeslots;
use Livewire\Component;

class TimeEdit extends Component
{ 
    public $timeslotId;
    public $day;
    public $start_time;

    public function mount($timeslotId)
    {
        $this->timeslotId= $timeslotId;
        $time = Timeslots::find($timeslotId);
        $this->day = $time->day;
        $this->start_time = $time->start_time;
    }

    public function save()
    {
        $time = Timeslots::find($this->timeslotId);
        $time->update([
            $time->day = $this->day,
            $time->start_time = $this->start_time,
        ]);
        
        return redirect()->route('admin.times.index')->with('success', 'Timeslot updated successfully.');
    }
    public function render()
    {
        return view('livewire.time.time-edit');
    }
}


   