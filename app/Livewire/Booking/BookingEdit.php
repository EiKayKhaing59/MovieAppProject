<?php

namespace App\Livewire\Booking;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\Customers;
use App\Models\Movie;
use App\Models\Timeslots;

class BookingEdit extends Component
{
    public $bookingId, $customer_id, $movie_id, $timeslot_id, $show_date, $total_price;

    public function mount($id)
    {
        $booking = Ticket::find($id);
        if ($booking) {
            $this->bookingId = $booking->id;
            $this->customer_id = $booking->customer_id;
            $this->movie_id = $booking->movie_id;
            $this->timeslot_id = $booking->timeslot_id;
            $this->show_date = $booking->show_date;
            $this->total_price = $booking->total_price;
        }
    }

    public function update()
    {
        $this->validate([
            'customer_id' => 'required',
            'movie_id' => 'required',
            'timeslot_id' => 'required',
            'show_date' => 'required',
            'total_price' => 'required',
        ]);

        if ($this->bookingId) {
            $booking = Ticket::find($this->bookingId);
            $booking->update([
                'customer_id' => $this->customer_id,
                'movie_id' => $this->movie_id,
                'timeslot_id' => $this->timeslot_id,
                'show_date' => $this->show_date,
                'total_price' => $this->total_price,
            ]);
        }

        return redirect()->route('admin.booking-index');
    }

    public function render()
    {
        return view('livewire.booking.booking-edit',
        [
            'customers' => Customers::all(),
            'movies' => Movie::all(),
            'timeslots' => Timeslots::all(),]);
    }
}
