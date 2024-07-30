<?php

namespace App\Livewire\Time;

use App\Models\Timeslots;
use Livewire\Component;

class CreateTime extends Component
{
    public $day='';
    public $start_time='';
    public function save(){
        Timeslots::create([
            'day'=>$this->day,
            'start_time'=>$this->start_time,
        ]);
    }
    public function render()
    {
        return view('livewire.time.create-time',
        ['timeslots' => Timeslots::paginate(100),]);
    }
}
