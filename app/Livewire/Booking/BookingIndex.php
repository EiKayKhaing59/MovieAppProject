<?php

namespace App\Livewire\Booking;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\Customers;
use App\Models\Movie;
use App\Models\Timeslots;
class BookingIndex extends Component
{
    public $bookings,$customers,$timeslots,$timeslot_id,$movies,$customer_id,$movie_id,$total_price,$show_date;

    public function member(){
        return redirect()->to('/admin/customers');
    }
    public function create(){
        return redirect()->to('/admin/showtimedisplay-index');
    }
     
    public function resetInputField(){
         $this->movie_id='';
         $this->customer_id='';
         $this->show_date='';
         $this->total_price='';
        $this->timeslot_id='';
    }
    public function store(){
        $this->validate([
            'customer_id'=>'required',
            'movie_id'=>'required',
            'timeslot_id'=>'required',
            'show_date'=>'required',
            'total_price'=>'required',
        ]);
        Ticket::create([
            'customer_id'=>$this->customer_id,
            'movie_id'=>$this->movie_id,
            'timeslots_id'=>$this->timeslot_id,
            'show_date'=>$this->show_date,
            'total_price'=>$this->total_price,
        ]);
    }
    public function delete($bookingId)
    {
        Ticket::find($bookingId)->delete();
    }
    public function render()
    {
        $this->bookings= Ticket::with('customer','movie','timeslot')->get();
        $this->movies=Movie::all();
        $this->timeslots=Timeslots::all();
       $this->customers=Customers::all();
        return view('livewire.booking.booking-index');
    }
}
