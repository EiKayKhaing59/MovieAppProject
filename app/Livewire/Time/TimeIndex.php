<?php

namespace App\Livewire\Time;

use App\Models\Timeslots;
use Livewire\Component;
class TimeIndex extends Component
{
    public function showCreateTime(){
        return redirect()->to('/admin/create-times');
    }
    public function showeditModal($timeslotId){
        $this->timeslotId->$timeslotId;
        $cus=Timeslots::find($timeslotId);
        $this->member_code=$cus->member_code;
        return redirect()->to('/admin/time-edit/{timeslotId}');
    }
    public function delete($timeslotsId){
        Timeslots::find($timeslotsId)->delete();
        return redirect()->to('/admin/time');
    }
    public function render()
    {
        return view('livewire.time.time-index',
        ['timeslots' => Timeslots::paginate(100),]);
    }
}
