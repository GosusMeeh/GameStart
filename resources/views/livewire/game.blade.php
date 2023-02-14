
<div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4">
    <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden">
        <img class="w-full h-full" alt="image of a girl posing" src="{{$game->image}}" />
    </div> 
    <div class="md:hidden">
        <img class="w-full" alt="image of a girl posing" src="{{$game->image}}" />
    </div>
    <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
        <div class="border-b border-gray-200 pb-6">
            <h1 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 dark:text-white mt-2">{{$game->name}}</h1>
        </div>
        <div class="py-4 border-b border-gray-200 flex items-center justify-between">
            <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Categoria</p>
            <div class="flex items-center justify-center">
                <p class="text-sm leading-none text-gray-600 dark:text-gray-300">{{\App\Models\Game::find($game->id)->categoryName->name}}</p>
            </div>
        </div>
        <div class="py-4 border-b border-gray-200 flex items-center justify-between">
            <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Precio</p>
            <div class="flex items-center justify-center">
                <p class="text-sm leading-none text-gray-600 dark:text-gray-300 -mr-2">
                    @if ($game->discount == 0)
                        {{ $game->price }} €
                    @else
                        {{ number_format($game->price*(1-$game->discount/100), 2, ',') }}{{'€'}} <s class="text-red-600 text-sm">{{ $game->price }} €</s> <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ '-'.$game->discount.'%'}}</span>
                    @endif
                </p>
            </div>
        </div>
        <div class="py-4 border-b border-gray-200 flex items-center justify-between">
            <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Formato</p>
            <div class="flex items-center justify-center">
                <p class="text-sm leading-none text-gray-600 dark:text-gray-300">
                    @if ($game->price == null)
                        Físico
                    @else
                        Digital
                    @endif
                </p>
            </div>
        </div><br>
        @auth

        <a href="{{}}" class="cursor-pointer dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white bg-gray-800 w-full py-4 hover:bg-gray-700">
            <x-cart-svg></x-cart-svg>&nbsp;Añadir al carrito
        </a>

        @else

        <h1 class="text-2xl text-gray-300 text-center mb-3">Necesita iniciar sesión para comprar </h1> 
        <a href="{{route('login')}}" class="cursor-pointer dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white bg-gray-800 w-full py-4 hover:bg-gray-700">
            Iniciar sesión
        </a>
            
        @endauth
    </div>
</div>
        
        
    
