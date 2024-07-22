<div 
    x-data="{show:false}"
    x-show="show"
    x-on:open-modal.window="show=true"
    x-on:close-modal.window="show=false"
    x-on:keydown.escape.window="show=false"
class="fixed inset-0 z-50 ">

<div class="bg-white rounded-lg m-auto fixed inset-0 text-black max-w-96" opacity-40 style="max-height:300px ;">
<div class="containermx-auto max-w-xl p-6">
    <!-- Coupon Code Card Form -->
    <div class="bg-white text-black  p-6 rounded-lg shadow-lg">

        <h1 class="text-2xl font-semibold mb-4">Choose Seat</h1>

        <!-- Coupon Code Input -->
        <div class="mb-4">
            <label for="coupon" class="block text-white font-semibold mb-2">Seats:</label>
            <input type="text" id="coupon" name="coupon" class="w-full px-4 py-2 border  border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:border-blue-500" placeholder="How many seats do you want?">
        </div>

        <!-- Apply Button -->
        <div class="text-center">
            <button wire:click="Seating" class="h-10 px-6 font-semibold rounded-md bg-green-500 text-white hover:bg-red-300">
                    Confirm Seat
                </button>
                <button x-on:click="$dispatch('close-modal')" class="h-10 px-6 font-semibold rounded-md bg-red-600 text-white hover:bg-red-300">
                    Close
                </button>
        </div>

        <!-- Coupon Code Result -->
        <div class="mt-4 text-green-500">
            Seat choose sucessfully.
        </div>
    </div>
</div>
</div>
</div>
</div>