<div x-data class="py-12">
    <div class="max-w-2xl mx-auto py-8 px-4 sm:px-6 lg:max-w-7xl lg:px-8 bg-gray-800 shadow-sm sm:rounded-lg">
        <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-gray-300">Tu carrito</h1>
        <div class="mt-8 lg:grid lg:grid-cols-12 lg:gap-x-12 lg:items-start xl:gap-x-16">
        <section aria-labelledby="cart-heading" class="lg:col-span-7">
            <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>

            <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">
                
            @foreach ( $currentOrder->items as $item )
                <livewire:cart-line :item="$item" :key="$item->game->id">
            @endforeach
            </ul>
        </section>

        <!-- Order summary -->
            <section aria-labelledby="summary-heading" class="mt-16 dark:bg-slate-700 text-white bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8 lg:mt-0 lg:col-span-5">
            <h2 id="summary-heading" class="text-lg font-medium ">Resumen</h2>

            <dl class="mt-6 space-y-4">
            <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
                <dt class="text-base font-medium ">Coste total:</dt>

                <dd class="text-base font-medium ">{{ number_format($total,2).'€' }}</dd>
            </div>
            </dl>
            @if ($total > 0)
            <div class="mt-6">
                <button wire:click="makeOrder" class="w-full bg-slate-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-slate-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Rellenar datos</button>
            </div>
            @else
            <div class="mt-6 grid mx-0">
                <a href=" {{ route('shop') }}" class="w-full bg-slate-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-center text-white hover:bg-slate-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Añadir juegos al carro</a>
            </div>
            @endif
        </section>
        </div>
    </div>
</div>