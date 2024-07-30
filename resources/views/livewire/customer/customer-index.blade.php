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

      <button wire:click="showCreateCustomer" type="button"
        class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Create
        User</button>

    </div>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr
              class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Member Code</th>
              <th class="px-4 py-3">Phone</th>
              <th class="px-4 py-3">Password</th>
              <th class="px-4 py-3">Active</th>
              <th class="px-4 py-3">Manage</th>

            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($customers as $customer)
        <tr class="text-gray-700">
          <td class="px-4 py-3 border">
          <div>
            <p class="font-semibold text-black">
            {{$customer->member_code}}
            </p>
          </div>
          </td>
          <td class="px-4 py-3 text-ms font-semibold border">
          {{$customer->phone}}
          </td>
          <td class="px-4 py-3 text-xs border">
          <span class="px-2 py-1 font-semibold leading-tight   rounded-sm">
            {{$customer->password}}
          </td>
          <td class="px-4 py-3 text-xs border">
          <span class="px-2 py-1 font-semibold leading-tight   rounded-sm">
            {{$customer->last_active_at}}
          </td>



          <td class="px-4 py-3 border text-sm">
          <a class="bg-green-500 text-white px-2 py-2 w-16 rounded hover:bg-green-700" href="{{route('admin.customers.edit',$customer->id)}}">Edit</a>
          <button class="bg-red-500 text-white px-2 py-2 w-16 rounded hover:bg-red-700" type="button"
            wire:click="delete({{$customer->id}})"
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