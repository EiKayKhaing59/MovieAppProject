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
  <section class=" container mx-auto p-6 font-mono ">



    <div class="ml-96">

      <button wire:click="showCreateTime" type="button"
      class="text-white  bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 items-center">Create
        Timeslots</button>

    </div>

    <div class=" sm:mx-auto lg:w-full lg:max-w-lg">
      <div class="w-full overflow-x-auto ">
        <table class="w-full  border border-slate-900">
          <thead>
            <tr
              class="text-md font-semibold tracking-wide text-left uppercase bg-gray-300 border-b border-gray-600">
              <th class="px-4 py-3 border border-slate-700">Date</th>
              <th class="px-4 py-3 border border-slate-700">Timetable</th>
              <th class="px-4 py-3 border border-slate-700">Manage</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($timeslots as $timeslot)
        <tr class="text-gray-700">
          <td class="px-4 py-3  border border-slate-400">
          <div>
            <p class="font-semibold ">
            {{$timeslot->day}}
            </p>
          </div>
          </td>
          <td class="px-4 py-3 text-ms  font-semibold border border-slate-400">
          {{$timeslot->start_time}}
          </td>
          <td class="px-4 py-3 text-xs border border-slate-400 ">
          <a class="bg-green-500 text-white px-2 py-2 w-16 rounded hover:bg-green-700" href="{{route('admin.times.edit',$timeslot->id)}}">Edit</a>
          <button class="bg-red-500 text-white px-2 py-2 w-16 rounded hover:bg-red-700" type="button"
            wire:click="delete({{$timeslot->id}})"
            wire:confirm="Are you sure you want to delete it?">Delete</button>
          
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