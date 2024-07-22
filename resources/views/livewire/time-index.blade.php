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



    <div class="w-full flex mb-8 ml-52 p-2  ">

      <button wire:click="showCreateTime" type="button"
        class="text-white bg-gradient-to-r bg-black via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Create
        Timeslots</button>

    </div>

    <div class="w-96 flex justify-center table-fixed  mb-8 overflow-hidden  rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto ">
        <table class="w-full  border border-slate-900">
          <thead>
            <tr
              class="text-md font-semibold tracking-wide text-left uppercase border-b border-gray-600">
              <th class="px-4 py-3 border border-slate-700">Date</th>
              <th class="px-4 py-3 border border-slate-700">Timetable</th>
              <th class="px-4 py-3 border border-slate-700">Manage</th>
            </tr>
          </thead>
          <tbody class="">
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
          <button wire:click="delete({{$timeslot->id}})" class="px-2 py-1 font-semibold leading-tight  rounded-sm">Delete</button>
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