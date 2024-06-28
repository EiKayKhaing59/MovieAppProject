<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @livewireStyles
</head>

<body>
  <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
  <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form wire:submit="save" class="space-y-6">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
        <div class="mt-2">
          <input wire:model="title" type="text" autocomplete="name" required
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

      </div>
      <x-secondary-button type="submit">Save</x-secondary-button>
      <x-button wire:click="generateMovie" class="bg-gray-600 hover:bg-gray-800 text-white">Generate Movie</x-button>
    </form>
  </div>

  </div>
  
  @livewireScripts
</body>

</html>