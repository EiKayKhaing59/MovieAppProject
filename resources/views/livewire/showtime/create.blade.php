<div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
        Show Time
    </div>
    <form class="py-4 px-6" action="" wire:submit="gotoShowIndex">
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" >
                Show Date
            </label>
            <input 
                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="date" type="date" placeholder="Select a date"
                         wire:model="show_date">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">
               Movie
            </label>
            <select class="px-4 py-2 border focus:ring-gray-900 focus:border-gray-900 w-full sm:text-base border-gray-300 rounded-md focus:outline-none text-gray-900" id="movie_id" wire:model="movie_id">
                      <option value="">Select Movie</option>
                      @foreach ($movies as $movie)
                          <option value="{{$movie->id}}">{{$movie->title}}</option>
                      @endforeach
                  </select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="phone">
                Time
            </label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="timeslot_id" wire:model="timeslot_id">
                      <option value="">Select Time</option>
                      @foreach ($timeslots as $timeslot)
                          <option value="{{$timeslot->id}}">{{$timeslot->start_time}}</option>
                      @endforeach
                  </select>
           
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="date">
                Income
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                 type="text" wire:model="income">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="time">
                Taken
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                 type="text" wire:model="taken">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="service">
                Available
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                 type="text" wire:model="available">
        </div>
        
        <div class="flex items-center justify-center mb-4">
            <button 
                class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                type="submit">
                Book Appointment
            </button>
        </div>
        </form>
    
</div>
