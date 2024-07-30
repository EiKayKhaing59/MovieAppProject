<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm  rounded px-2">
<h1 class="py-2 text-2xl font-semibold">Edit Movie</h1>
    <form class="" wire:submit.prevent="save">
        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="title">Title</label>
            <input  class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" id="title" class="form-control" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="overview">Overview</label>
            <textarea class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" id="overview" class="form-control" wire:model="overview"></textarea>
            @error('overview') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="runtime">Runtime</label>
            <input class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" type="number" id="runtime" class="form-control" wire:model="runtime">
            @error('runtime') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="poster_path">Poster Path</label>
            <input class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" type="text" id="poster_path" class="form-control" wire:model="poster_path">
            @error('poster_path') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="release_date">Release Date</label>
            <input class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" type="date" id="release_date" class="form-control" wire:model="release_date">
            @error('release_date') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="py-2  justify-between">
        <button class="text-white  bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" type="submit">
          Update
        </button>
        <a href="{{ route('admin.movieindexs') }}" class="text-white  bg-red-800 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-red-700">
          Cancel
        </a>
    </form>
</div>
