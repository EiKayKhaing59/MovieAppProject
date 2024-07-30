<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Movie;
use App\Models\Customers;

class BookingDetail extends Component
{
    public function goShowTime(){
        return redirect()->to('/admin/show-index');
    }
    public function ticketBooking(){
       
    }
    public function render()
    {
        return view('livewire.booking-detail',
        ['movies' => Movie::paginate(100),
        'customers'=>Customers::paginate(100),]
    );
    }
}
