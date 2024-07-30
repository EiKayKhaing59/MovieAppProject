<?php

namespace App\Livewire;

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
        return view('livewire.create-time',
        ['timeslots' => Timeslots::paginate(100),]
    );
    }
}
