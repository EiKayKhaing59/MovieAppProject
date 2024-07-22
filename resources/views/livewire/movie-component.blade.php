<div>
    <h1>Movies</h1>
    <ul>
        @foreach($movies as $movie)
            <li>
                {{ $movie['title'] }} 
                <button wire:click="selectMovie({{ $movie['id'] }})">Select</button>
            </li>
        @endforeach
    </ul>
</div>