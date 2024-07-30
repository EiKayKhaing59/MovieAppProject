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
  <div class="">
    <table>
      <thead></thead>
      <tbody>
        <div class="  rounded-lg grid grid-cols-5 gap-0">
          <img class="rounded-lg m-10 object-fill h-72 w-auto"
            src="https://image.tmdb.org/t/p/original/{{$movie->poster_path}}" alt="">
          <div class="m-10">
            Release Date:<div>
              {{$movie->release_date}}
            </div>
            <div class="my-2.5">
              Running Time:
              {{$movie->runtime}} min
            </div>
            <div>
              Country: USA
            </div>
            <div>
              <button wire:click="video" class="bg-black my-2 text-white rounded-md py-2 px-6">
                Trailer
              </button>
            </div>
          </div>
        </div>
        
        <div class="m-2 ">
          {{$movie->overview}}
        </div>
        
      </tbody>
    </table>
  </div>

</body>

</html>