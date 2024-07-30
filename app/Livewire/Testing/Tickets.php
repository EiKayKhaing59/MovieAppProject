<?php

namespace App\Livewire;
use App\Models\Customers;
use App\Models\Movie;
use App\Models\Ticket;
use App\Models\Timeslots;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\Booking;
use Livewire\WithPagination;


class Tickets extends Component
{
   public $bookings,$timeslots,$timeslot_id,$movies,$customer_id,$movie_id,$total_price,$show_date;
   public $customers='';
   
    public function member(){
        return redirect()->to('/admin/customers');
    }
    public function create(){
        $this->store();
        
    }
     
    public function resetInputField(){
         $this->customer_id='';
         $this->movie_id='';
         $this->show_date='';
         $this->total_price='';
        $this->timeslot_id='';
    }
    public function storeBooking(){
       
        Ticket::create([
            'customer_id'=>$this->customer_id,
            'movie_id'=>$this->movie_id,
            'timeslot_id'=>$this->timeslot_id,
            'show_date'=>$this->show_date,
            'total_price'=>$this->total_price,
        ]);
        return redirect()->to('/admin/booking-index');
    }

    public function render()
    {
       $this->bookings= Ticket::with('customers','movies','timeslots')->get();
        $this->movies=Movie::all();
        $this->timeslots=Timeslots::all();
       $this->customers=Customers::all();
       return view('livewire.tickets');
    }
}
