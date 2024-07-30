<div class="containermt-10 sm:mx-auto sm:w-full sm:max-w-sm">
  <div class="w-full overflow-x-auto">
    <h2 class="text-lg font-2xl font-semibold mb-4">Edit Timeslot</h2>
    <form wire:submit.prevent="save">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="day">Day</label>
        <input wire:model="day" class="shadow appearance-none border rounded w-48 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="day">
        @error('day') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="start_time">Start Time</label>
        <input wire:model="start_time" class="shadow appearance-none border rounded w-48 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="start_time">
        @error('start_time') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
      </div>
      <div class="  justify-between">
        <button class="text-white  bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" type="submit">
          Update
        </button>
        <a href="{{ route('admin.times.index') }}" class="text-white  bg-red-800 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-red-700">
          Cancel
        </a>
      </div>
    </form>
  </div>
</div>