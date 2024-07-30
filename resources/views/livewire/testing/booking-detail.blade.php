<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')

</head>

<body>
@foreach ($movies as $movie)
  @endforeach
  <div class="bg-black">
 
    <div class="flex font-sans">
      <div class="flex-none w-96 h-96 relative">
        <img wire:click="goShowTime()" src="https://image.tmdb.org/t/p/original/{{$movie->poster_path}}" alt=""
          class="absolute inset-0 w-full h-full object-cover" loading="lazy" />
      </div>
      <form class="flex-auto p-6">
        <div class="flex flex-wrap">
          <h1 class="flex-auto text-2xl  font-extrabold text-white">
            {{$movie->title}}
          </h1>

          <div class="w-full flex-none text-sm font-medium text-white mt-2">
            Release Date:
            {{$movie->release_date}}
          </div>
        </div>
        <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200">
          <div class="space-x-2 flex text-sm">
            <label>
              <input class="sr-only peer" name="size" type="radio" value="xs" checked />
              <div
                class="w-5 h-5 rounded-lg flex items-center justify-center text-white peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                2D
              </div>
            </label>
            <label>
              <input class="sr-only peer" name="size" type="radio" value="s" />
              <div
                class="w-18 h-18 rounded-lg flex items-center justify-center text-white peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                3D
              </div>
            </label>
            <label>
              <input class="sr-only peer" name="size" type="radio" value="m" />
              <div
                class="w-18 h-18 rounded-lg flex items-center justify-center text-white peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                IMAX 2D
              </div>
            </label>
            <label>
              <input class="sr-only peer" name="size" type="radio" value="l" />
              <div
                class="w-18 h-18 rounded-lg flex items-center justify-center text-white peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                IMAX 3D
              </div>
            </label>
          </div>
        </div>
        <div class=" w-full flex-none text-sm font-medium text-white p-4 mt-2">
          Runtime:
          {{$movie->runtime}}
        </div>

        <div class="flex-auto flex space-x-4">
          <button wire:click="goShowTime()" class="h-10 px-6 font-semibold rounded-md bg-red-600 text-white hover:bg-red-300"
           >
            Book Tickets
          </button>
        </div>
        
    </div>
    </form>
    <div class="bg-white mt-2 p-4 text-2xl ">
      About the Movie
    </div>
    <div class="bg-white p-4">
      {{$movie->overview}}
    </div>
    
  </div>
  
  </div>

</body>

</html>