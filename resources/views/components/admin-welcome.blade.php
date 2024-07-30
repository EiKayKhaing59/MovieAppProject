<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
  <div class="text-xl font-bold text-green-700">
    Movie App
  </div>

  <h1 class="mt-8 text-2xl font-medium text-gray-900">
    Movie Database
  </h1>
</div>
<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
  <div>
    <div class="flex w-44 bg-gray-800  rounded h-28 items-center border border-gray-600 ">

      <h2 class="ms-3  text-xl font-semibold text-green-700">
        <a href="#">
          {{$movies->count() }} Movies
        </a>
      </h2>
    </div>
    </a>
    </p>
  </div>
  <div>
    <div class="flex w-44 bg-gray-800  rounded h-28 items-center border border-gray-600">

      <h2 class="ms-3  text-xl font-semibold text-green-700">
        <a href="#">
          {{$customers->count()}} Customers
        </a>
      </h2>
    </div>
    </a>
    </p>
  </div>
  <div>
    <div class="flex w-44 bg-gray-800  rounded h-28 items-center border border-gray-600">

      <h2 class="ms-3  text-xl font-semibold text-green-700">
        <a href="#">
          {{$timeslots->count()}} Showtimes
        </a>
      </h2>
    </div>
    </a>
    </p>
  </div>
  <div>
    <div class="flex w-44 bg-gray-800  rounded h-28 items-center border border-gray-600">

      <h2 class="ms-3  text-xl font-semibold text-green-700">
        <a href="#">
          {{$bookings->count()}} Bookings
        </a>
      </h2>
    </div>
    </a>
    </p>
  </div>
</div>
@yield('content')
</div>