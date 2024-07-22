<?php

namespace App\Livewire\Showtime;

use App\Models\ShowTime;
use Livewire\Component;
use App\Models\Movie;
use App\Models\Timeslots;
class Create extends Component
{
    public $showtimes,$movies,$timeslots,$movie_id,$timeslot_id,$show_date,$income,$available,$taken;

    public function gotoShowIndex(){
       
        ShowTime::create([
            'show_date'=>$this->show_date,
            'movie_id'=>$this->movie_id,
            'timeslot_id'=>$this->timeslot_id,
            'income'=>$this->income,
            'taken'=>$this->taken,
            'available'=>$this->available,
        ]);
        return redirect()->to('/admin/showtimes');
    }

    public function render()
    {
        $this->showtimes= ShowTime::with('movies','timeslots')->get();
        $this->movies=Movie::all();
        $this->timeslots=Timeslots::all();
       
       return view('livewire.showtime.create');
    }
       
    
}
