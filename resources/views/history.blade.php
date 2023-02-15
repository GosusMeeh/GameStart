<x-app-layout>
    @foreach($pedidos as $pedido)
    <div class="pt-12">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8 dark:bg-gray-800 py-8 rounded-2xl text-gray-300">
            <h1 class="text-2xl mb-3">Pedido #{{$pedido->id}}</h1>
            <hr class="mb-3" >
            @foreach ($pedido->items as $index => $item)
                <div class="mb-3 grid grid-cols-4">
                    <img src="{{$item->game->image}}" class="rounded-lg col-span-1 w-full" style="height: 400px">
                    <div class="ml-3 col-span-3">
                        <h1 class="text-3xl">{{ $item->game->name }}</h1>
                        <h2 class="text-xl">Cantidad: {{ $item->quantity }}</h2>
                    </div>
                </div>
                
                @if($index+1 != $pedido->items->count())
                    <hr class="opacity-5 mb-3">
                @endif
            @endforeach
            <hr class="my-3 col-span-4">
            <h1 class="text-2xl">Total: {{ $pedido->totalPrice.'€' }}</h1>
            <hr class="my-3 col-span-4">
        </div>
    </div>
    @endforeach
    <div class="pt-12"></div>
</x-app-layout>