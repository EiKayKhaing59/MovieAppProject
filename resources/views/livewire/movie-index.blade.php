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
  @livewire('create-movie')
<section class="container mx-auto p-6 font-mono">
  <div class="w-full flex mb-4 p-2 justify-end">
    <x-button wire:click="$dispatch('showCreateModal')">Create Movie</x-button>
  </div>

  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
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
          @foreach ($items as $item)
              <tr class="text-gray-700">
                <td class="px-4 py-3 border">           
                    <div>
                      <p class="font-semibold text-black ">Avatar</p>        
                    </div>
                </td>
                <td class="px-4 py-3 text-ms font-semibold border">22</td>
                <td class="px-4 py-3 text-xs border">
                  <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> 2 hour </span>
                </td>
                <td class="px-4 py-3 text-sm border"></td>
                <td class="px-4 py-3 border text-sm">-</td>
                <td class="px-4 py-3 border text-sm">-</td>
                <td class="px-4 py-3 border text-sm">Edit/Delete</td>
              </tr>
              @endforeach
               {{$movies->links() }}   
        </tbody>
        
      </table>
    </div>
  </div>
  <x-dialog-modal wire:model="showTagModal">
    <x-slot name="title">Title</x-slot>
    <x-slot name="content">Content</x-slot>
    <x-slot name="footer">Footer</x-slot>
  </x-dialog-modal>
</section>
@livewireScripts
</body>
</html>