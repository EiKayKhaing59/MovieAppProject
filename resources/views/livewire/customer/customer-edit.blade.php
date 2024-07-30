<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <h1 class="py-2 text-2xl font-semibold">Edit Customer</h1>
    <form wire:submit.prevent="save">
        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="member_code">Member Code</label>
            <input class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" wire:model="member_code" class="form-control">
        </div>
        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="phone">Phone</label>
            <input class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" wire:model="phone" class="form-control" type="text" wire:model="phone" class="form-control">
        </div>
        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="password">Password</label>
            <input class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" wire:model="password" class="form-control" type="text" wire:model="password" class="form-control" type="text" wire:model="password" class="form-control">
        </div>
        <div class="form-group">
            <label class="block text-sm py-2 font-medium leading-6 text-gray-900" for="last_active_at">Active</label>
            <input class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="datetime-local" wire:model="last_active_at" class="form-control">
        </div>
        <div class="pt-2">
        <button class="text-white  bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" type="submit">Update</button>
        </div>
        
    </form>
</div>