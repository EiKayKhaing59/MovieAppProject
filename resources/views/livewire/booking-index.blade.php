<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @livewireStyles
  @vite('resources/css/app.css')
</head>

<body>

  <!-- component -->
  
  
  <section class=" container mx-auto p-6 font-mono">
    
    <div class="w-full flex mb-4 p-2 justify-end">

      <button wire:click="create" type="button"
        class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" >Booking 
        Lists</button>

    </div>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr
              class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Customer</th>
              <th class="px-4 py-3">Movie</th>
              <th class="px-4 py-3">Timeslot</th>
              <th class="px-4 py-3">Date</th>
              <th class="px-4 py-3">Total Price</th>
            <th class="px-4 py-3">Manage</th>
            </tr>
          </thead>
          <tbody class="bg-white">
          @foreach ($bookings as $booking)
            <tr class="text-gray-700">
              <td class="px-4 py-3 border">
                <div>
                  <p wire:model="customer_id" class="font-semibold text-black">{{$booking->customer->member_code}}</p>
                </div>
              </td>
              <td wire:model="movie_id" class="px-4 py-3 text-ms font-semibold border">{{$booking->movie->title}}</td>
              <td class="px-4 py-3 text-xs border">
                <span wire:model="timeslot_id" class="px-2 py-1 font-semibold leading-tight   rounded-sm">{{$booking->timeslot->start_time}}
              </td>
              <td class="px-4 py-3 text-xs border">
                <span  wire:model="show_date" class="px-2 py-1 font-semibold leading-tight   rounded-sm">{{$booking->show_date}}
              </td>
              <td class="px-4 py-3 text-xs border">
                <span wire:model="total_price" class="px-2 py-1 font-semibold leading-tight   rounded-sm">{{$booking->total_price}}
              </td>
    
              <td class="px-4 py-3 border text-sm">
                <button type="button"  wire:confirm="Are you sure you want to delete it?">Delete</button>
              </td>

            </tr>
            @endforeach
            
          </tbody>

        </table>
        
      </div>
      
    </div>
    
  </section>

  @livewireScripts
</body>

</html>
