<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @livewireStyles
</head>

<body>
  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form wire:submit="save" class="space-y-6">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Member Code</label>
        <div class="mt-2">
          <input wire:model="member_code" type="text" autocomplete="name" required
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

      </div>
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
        <div class="mt-2">
          <input wire:model="phone" type="text" autocomplete="name" required
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

      </div>
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
        <div class="mt-2">
          <input wire:model="password" type="text" autocomplete="name" required
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

      </div>
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Last Active</label>
        <div class="mt-2">
          <input wire:model="last_active_at" type="text" autocomplete="name" required
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

      </div>
      <button
        class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"
        type="submit">Create</button>
    </form>
  </div>

  </div>

  @livewireScripts
</body>

</html>