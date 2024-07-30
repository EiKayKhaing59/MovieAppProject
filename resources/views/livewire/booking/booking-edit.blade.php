<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="text-2xl font-semibold">Edit Booking</h2>
    <form wire:submit.prevent="update">
        @csrf
        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="customer_id">Customer</label>
            <select class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" wire:model="customer_id" id="customer_id" class="form-control">
                <option value="">Select Customer</option>
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->member_code }}</option>
                @endforeach
            </select>
            @error('customer_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="movie_id">Movie</label>
            <select class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" wire:model="movie_id" id="movie_id" class="form-control">
                <option value="">Select Movie</option>
                @foreach ($movies as $movie)
                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                @endforeach
            </select>
            @error('movie_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="timeslot_id">Timeslot</label>
            <select class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" wire:model="timeslot_id" id="timeslot_id" class="form-control">
                <option value="">Select Timeslot</option>
                @foreach ($timeslots as $timeslot)
                    <option value="{{ $timeslot->id }}">{{ $timeslot->start_time }}</option>
                @endforeach
            </select>
            @error('timeslot_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="show_date">Show Date</label>
            <input class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="date" wire:model="show_date" id="show_date" class="form-control">
            @error('show_date') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="total_price">Total Price</label>
            <input class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" wire:model="total_price" id="total_price" class="form-control">
            @error('total_price') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="py-2">
        <button type="submit" class="text-white py-2 bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg  text-sm px-5  me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700  dark:focus:ring-gray-700 dark:border-gray-700">Update</button>
        </div>
    </form>
</div>