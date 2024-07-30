<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Booking</title>
</head>
<body>
<div class="space-y-4">
  <div class="w-full h-12  text-2xl font-bold rounded">
     <h2 >Recommended Movies</h2>
  </div>
  <div class=" grid grid-cols-5">
    @foreach ($movies as $movie)

    
    <div class="relative">
        <img wire:click="booking" class="w-52 h-54 rounded-xl mb-px" src="https://image.tmdb.org/t/p/original/{{$movie->poster_path}}" alt="">
       
      <div class="text-center font-semibold ">
        {{$movie->title}}
      </div>
    </div>
    
    @endforeach
    
 </div>
</body>
</html>