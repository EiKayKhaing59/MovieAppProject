<div>
    <form wire:submit.prevent="save">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" class="form-control" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="overview">Overview</label>
            <textarea id="overview" class="form-control" wire:model="overview"></textarea>
            @error('overview') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="runtime">Runtime</label>
            <input type="number" id="runtime" class="form-control" wire:model="runtime">
            @error('runtime') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="poster_path">Poster Path</label>
            <input type="text" id="poster_path" class="form-control" wire:model="poster_path">
            @error('poster_path') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="release_date">Release Date</label>
            <input type="date" id="release_date" class="form-control" wire:model="release_date">
            @error('release_date') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Movie</button>
    </form>
</div>
