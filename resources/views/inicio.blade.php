<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg l-6">
                <h1 class="pt-6 text-2xl pl-4 md:pl-3 lg:pl-6 text-gray-900 dark:text-gray-100"> Nuestros mayores descuentos</h1>
                <!-- Product grid -->
            <div class="mx-4 md:mx-3 relative pb-10 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-6 lg:px-4 lg:mr-3 lg:col-span-2 xl:col-span-3 border-dashed border-gray-200 rounded-lg">
                
                <!-- Replace with your content -->
                    @foreach ($games as $game)
                    <div class="max-w-sm rounded shadow-card">
                        <img class="w-full rounded-t object-cover" style="height: 400px" src="{{ $game->image }}" alt="Portada de {{ $game->name }}">
                        <div class="px-2 py-4 self-end">
                            <div class="font-bold text-xl mb-2 text-gray-300">{{ $game->name }}</div>
                            <p class="text-gray-500 text-2xl">
                                @if ($game->discount == 0)
                                    {{ $game->price }} €
                                @else
                                    {{ number_format($game->price*(1-1*$game->discount/100), 2, ',') }}{{'€'}} <s class="text-red-600 text-sm">{{ $game->price }} €</s> <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ '-'.$game->discount.'%'}}</span>
                                @endif
                            </p>
                        </div>
                    </div>
                    @endforeach
                <!-- /End replace -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>