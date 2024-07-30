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
      <form class="flex space-x-4 shadow bg-white rounded-md m-2 p-2" action="">
        <div class="p-1 flex items-center">
          <div class="col-span-4 sm:col-span-2">
            <label for="first-name" class="block text-sm font-medium text-gray-700 mr-4" >Movie TMDB ID</label>
            <div class="relative rounded-md shadow-sm">
            <input wire:model="movieTMDBId" type="text" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full 
            shadow-sm sm:text-sm border-gray-300">
            </div>
            
          </div>
        </div>
      </form>
      <button wire:click="generateMovie" type="button" class="inline-flex items-center w-36 h-24 justify-center py-2 px-4 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-800 hover:bg-gray-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-green-700 transition duration-150 ease-in-out disabled:opacity-50">Update Movie</button>
       
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
              <th class="px-4 py-3">
                Detail
              </th>
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
              <td class="px-4 py-3 text-ms font-semibold border">{{$movie->overview}}</td>
              <td class="px-4 py-3 text-xs border">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{$movie->runtime}} min
                </span>
              </td>
              <td class="px-4 py-3 text-sm border">
                <img class="w-14 h-14 rounded" src="https://image.tmdb.org/t/p/original/{{$movie->poster_path}}" alt="">
              </td>
              <td class="px-4 py-3 border text-sm">{{$movie->release_date}}</td>
              <td class="px-4 py-3 border text-sm">{{$movie->last_updated_at}}</td>
              <td class="px-4 py-3 border text-sm">
                <div class="flex">
                <a href="{{route('admin.movie.edit',$movie->id)}}" class="bg-green-500 text-white px-2 py-2 mx-1 w-16 rounded hover:bg-green-700 text-center">Edit</a>
                <button class="bg-red-500 text-white px-2 py-2 w-16 rounded hover:bg-red-700" type="button" wire:click="delete({{$movie->id}})" wire:confirm="Are you sure you want to delete it?">Delete</button>
                </div>
              
              </td>
              <td class="px-4 py-3 border text-sm">
               <button wire:click="detail({{$movie->id}})" class="bg-blue-500 text-white py-2 px-2 rounded hover:bg-blue-700">Detail</button>
              </td>
            </tr>
            @endforeach

          </tbody>
        
        </table>
        <div class="m-2 p-2">
          {{$movies->links()}}
        </div>
      </div>
    </div>
   
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
   
  </section>
  
  @livewireScripts
</body>

</html>