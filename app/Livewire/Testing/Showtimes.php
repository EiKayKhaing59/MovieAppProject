<?php

namespace App\Livewire;
use App\Models\Movie;
use App\Models\Timeslots;
use Livewire\Component;
use App\Models\ShowTime;
class Showtimes extends Component
{
    public $showtimes,$movies,$timeslots,$movie_id,$timeslot_id,$show_date,$income,$available,$taken;
    
    public function showTicketModal(){
        $this->showtime=true;
    }
    public function Seating(){
      
        return redirect()->to('/admin/showtimedisplay-index');
    }
    public function render()
    {
        $this->showtimes= ShowTime::with('movies','timeslots')->get();
        $this->movies=Movie::all();
        $this->timeslots=Timeslots::all();
        return view('livewire.showtime');
        
    }
}
