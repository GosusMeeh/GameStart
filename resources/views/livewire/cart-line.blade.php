<li class="flex py-3 sm:py-5">
    <style>
        select[type=number]::-webkit-inner-spin-button {
            background-color: darkslateblue;
            color: lightskyblue;
        }
    </style>
    <div class="flex-shrink-0">
        <img src="{{$item->game->image}}" alt="Front of men&#039;s Basic Tee in sienna." class="w-24 h-24 rounded-md object-center object-cover sm:w-48 sm:h-56">
    </div>

    <div class="ml-4 flex-1 flex flex-col justify-between sm:ml-6">
        <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
            <div>
                <a href="{{route('game', $item->game->id )}}" class="text-2xl text-gray-300">{{ $item->game->name }}</a>
                <div class="mt-1 flex text-sm">
                    <p class="text-gray-500"> {{ $item->game->stock==null ? 'Digital' : 'Físico' }} </p>

                    <p class="ml-4 pl-4 border-l border-gray-200 text-gray-500">{{ $item->game->categoryName->name }}</p>
                </div>
                <p class="mt-1 text-sm font-medium text-gray-300">{{ number_format($item->game->price * (1-$item->game->discount/100) * $item->quantity, 2) }}{{'€'}}</p>
            </div>

            <div class="mt-4 sm:mt-0 sm:pr-9">
                <label for="quantity" class="sr-only">Quantity, Basic Tee</label>
                @if($item->game->stock === null)
                    <select wire:model="quantity" wire:change="updateCart" class="max-w-full bg-gray-700 text-gray-300 rounded-md border border-gray-300 py-1.5 text-base leading-5 font-medium text-left shadow-sm sm:text-sm">
                        @for($i = 0; $i<=10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                @else
                    <select wire:model="quantity" wire:change="updateCart" id="quantity" name="quantity"class="max-w-full bg-gray-700 text-gray-300 rounded-md border border-gray-300 py-1.5 text-base leading-5 font-medium text-left shadow-sm sm:text-sm">
                        @for($i = 0; $i<=$item->game->stock; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                @endif

                <div class="absolute top-0 right-0">
                    <button type="button" wire:click="deleteCart" class="-m-2 p-2 inline-flex text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Remove</span>
                        <!-- Heroicon name: solid/x -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</li>