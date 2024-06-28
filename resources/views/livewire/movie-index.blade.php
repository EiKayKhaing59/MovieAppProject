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

  <section class="container mx-auto p-6 font-mono">
    <div class="w-full flex mb-4 p-2 justify-end">
      <x-button wire:click="showCreateModal">Create Movie</x-button>
    </div>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr
              class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Title</th>
              <th class="px-4 py-3">Overview</th>
              <th class="px-4 py-3">RunTime</th>
              <th class="px-4 py-3">Poster</th>
              <th class="px-4 py-3">Release-Date</th>
              <th class="px-4 py-3">Last Update</th>
              <th class="px-4 py-3">Manage</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($movies as $movie)
            <tr class="text-gray-700">
              <td wire:key="{{$movie->id}}" class="px-4 py-3 border">
                <div>
                  <p class="font-semibold text-black">{{$movie->title}}</p>
                </div>
              </td>
              <td class="px-4 py-3 text-ms font-semibold border">22</td>
              <td class="px-4 py-3 text-xs border">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> 2 hour
                </span>
              </td>
              <td class="px-4 py-3 text-sm border"></td>
              <td class="px-4 py-3 border text-sm">{{$movie->release_date}}</td>
              <td class="px-4 py-3 border text-sm">2.3.2022</td>
              <td class="px-4 py-3 border text-sm">
                <button type="button" wire:click="delete({{$movie->id}})" wire:confirm="Are you sure you want to delete it?">Delete</button>
              </td>
            </tr>
            @endforeach

          </tbody>

        </table>
      </div>
    </div>
    <x-dialog-modal wire:model="showTagModal">
      <x-slot name="title">
        {{ __('Adding Item') }}
      </x-slot>

      <x-slot name="content">
        {{ __('Are you sure?') }}
      </x-slot>

      <x-slot name="footer">
        {{ __('Are you sure?') }}
      </x-slot>
    </x-dialog-modal>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form wire:submit="save" class="space-y-6">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
        <div class="mt-2">
          <input wire:model="title" type="text" autocomplete="name" required
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

      </div>
      <x-secondary-button type="submit">Save</x-secondary-button>
      <x-button wire:click="generateMovie" class="bg-gray-600 hover:bg-gray-800 text-white">Generate Movie</x-button>
    </form>
  </div>
  </section>
  
  @livewireScripts
</body>

</html>