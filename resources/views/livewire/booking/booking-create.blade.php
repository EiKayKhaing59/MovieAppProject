<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  @vite('resources/css/app.css')
</head>

<body>
  <div>
    <!-- component -->
    <!--
  UI Design Prototype
  Link : https://dribbble.com/shots/10452538-React-UI-Components
-->

    <div class="min-h-screen  py-6 flex flex-col justify-center sm:py-12">
      <div class="relative py-3 w-1/2 sm:mx-auto">
        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
          <div class="max-w-md  mx-auto">
            <div class="flex items-center space-x-5">
              <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                <rect width="256" height="256" fill="none" />
                <path d="M40,112H216a0,0,0,0,1,0,0v88a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V112A0,0,0,0,1,40,112Z" fill="none"
                  stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
                <path d="M40,112,210,66.4l-8.3-30.9a7.9,7.9,0,0,0-9.8-5.6L37.4,71.3a8,8,0,0,0-5.7,9.8Z" fill="none"
                  stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24" />
                <line x1="130.1" y1="46.4" x2="179.1" y2="74.7" fill="none" stroke="#000" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="24" />
                <line x1="60.6" y1="65.1" x2="109.5" y2="93.4" fill="none" stroke="#000" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="24" />
              </svg>
              <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                <h2 class="leading-relaxed">Movie Ticket Booking</h2>

              </div>
            </div>
            <div class="divide-y divide-gray-200">
              <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                <div class="flex flex-col">
                  <label class="leading-loose font-medium">Member Code</label>
                  <select class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-base border-gray-300 rounded-md focus:outline-none text-gray-900" id="customer_id" wire:model="customer_id">
                      <option value="">Select member</option>
                      @foreach ($customers as $customer)
                          <option value="{{$customer->id}}">{{$customer->member_code}}</option>
                      @endforeach
                  </select>
                  
                </div>
                <div class="flex flex-col">
                  <label class="leading-loose font-medium">Movie</label>
                  <select class="px-4 py-2 border focus:ring-gray-900 focus:border-gray-900 w-full sm:text-base border-gray-300 rounded-md focus:outline-none text-gray-900" id="movie_id" wire:model="movie_id">
                      <option value="">Select Movie</option>
                      @foreach ($movies as $movie)
                          <option value="{{$movie->id}}">{{$movie->title}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="flex items-center space-x-4">
                  <div class="flex flex-col">
                    <label class="leading-loose font-medium">Show Day</label>
                    <div class="relative focus-within:text-gray-600 text-gray-400">
                      <input 
                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="date" type="date" placeholder="Select a date"
                         wire:model="show_date">
                      
                      <div class="absolute left-3 top-2">
                        
                      </div>
                    </div>
                  </div>
                  <div class="flex flex-col w-2/3">
                    <label class="leading-loose font-medium">Show Time</label>
                    <div class="relative focus-within:text-gray-600 text-gray-400">
                    <select class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-base border-gray-300 rounded-md focus:outline-none text-gray-900" id="timeslot_id" wire:model="timeslot_id">
                      <option value="">Select Time</option>
                      @foreach ($timeslots as $timeslot)
                          <option value="{{$timeslot->id}}">{{$timeslot->start_time}}</option>
                      @endforeach
                  </select>
                      <div class="absolute left-3 top-2">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                          </path>
                        </svg>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex flex-col">
                  <label class="leading-loose font-medium">Total Price</label>
                  <input type="text"
                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                    wire:model="total_price"
                    placeholder="">
                </div>
              </div>
              <div class="pt-4 flex items-center space-x-4">
              <button wire:click="storeBooking"
                  class="bg-black flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Book Now
              </button>
                <button
                wire:click="member" class="bg-black flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">New
                  member?</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     
  </div>

</body>
</html>