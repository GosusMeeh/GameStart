<main class="max-w-2xl mx-auto py-8 px-4 sm:py-10 sm:px-6 sm:max-w-7xl lg:px-8">
    <div class="pb-2">
        <h1 class="text-4xl font-extrabold tracking-tight text-gray-300">Nuestro catálogo</h1>
        <p class="mt-4 text-base text-gray-500">¡Busca el juego que encaja con tu gamemode!</p>
    </div>

    <div class="pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
        <!-- Nav SM -->
        <div class="lg:hidden">
                <!-- Filters -->
            <section aria-labelledby="filter-heading">
                <h2 id="filter-heading" class="sr-only">Filters</h2>

                <div class="relative z-10  border-b border-gray-200 pb-4">
                    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between sm:px-6 lg:px-8">
                        <div class="relative inline-block text-left">
                            <div>
                                <h1 class="text-gray-300 col-span-3">{{count($games)}} resultados</h1>
                            </div>
                        </div>

                        <div class="">
                            <div class="flow-root">
                                <div class="-mx-4 flex items-center divide-x divide-gray-200">
                                    <div class="px-4 relative inline-block text-left">
                                        <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-300 hover:text-gray-900" aria-expanded="false">
                                            <span>Category</span>
                                            <!-- Heroicon name: solid/chevron-down -->
                                            <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>

                                        <div class="origin-top-right absolute right-0 mt-2 bg-white rounded-md shadow-2xl p-4 ring-1 ring-black ring-opacity-5 focus:outline-none">
                                            <form class="space-y-4">
                                                <div class="flex items-center">
                                                    <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-category-0" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> All New Arrivals </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="filter-category-1" name="category[]" value="tees" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-category-1" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Tees </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="filter-category-2" name="category[]" value="objects" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-category-2" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Objects </label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="px-4 relative inline-block text-left">
                                        <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-300 hover:text-gray-900" aria-expanded="false">
                                            <span>Color</span>
                                            <!-- Heroicon name: solid/chevron-down -->
                                            <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <div class="origin-top-right absolute right-0 mt-2 bg-white rounded-md shadow-2xl p-4 ring-1 ring-black ring-opacity-5 focus:outline-none">
                                            <form class="space-y-4">
                                                <div class="flex items-center">
                                                    <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-color-0" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> White </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-color-1" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Beige </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="filter-color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-color-2" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> Blue </label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="px-4 relative inline-block text-left">
                                        <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-300 hover:text-gray-900" aria-expanded="false">
                                            <span>Sizes</span>
                                            <!-- Heroicon name: solid/chevron-down -->
                                            <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <div class="origin-top-right absolute right-0 mt-2 bg-white rounded-md shadow-2xl p-4 ring-1 ring-black ring-opacity-5 focus:outline-none">
                                            <form class="space-y-4">
                                                <div class="flex items-center">
                                                    <input id="filter-sizes-0" name="sizes[]" value="s" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-sizes-0" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> S </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="filter-sizes-1" name="sizes[]" value="m" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-sizes-1" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> M </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="filter-sizes-2" name="sizes[]" value="l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                                    <label for="filter-sizes-2" class="ml-3 pr-6 text-sm font-medium text-gray-900 whitespace-nowrap"> L </label>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Active filters -->
                <div class="">
                    <div class="max-w-7xl mx-auto py-3 px-4 sm:flex sm:items-center sm:px-6 lg:px-8">
                        <h3 class="text-xs font-semibold uppercase tracking-wide text-gray-500">
                            Filtros
                            <span class="sr-only">, active</span>
                        </h3>

                        <div aria-hidden="true" class="hidden w-px h-5 bg-gray-300 sm:block sm:ml-4"></div>

                        <div class="mt-2 sm:mt-0 sm:ml-4">
                            <div class="-m-1 flex flex-wrap items-center">
                                <span class="m-1 inline-flex rounded-full border border-gray-200 items-center py-1.5 pl-3 pr-2 text-sm font-medium bg-white text-gray-900">
                                <span>Objects</span>
                                    <button type="button" class="flex-shrink-0 ml-1 h-4 w-4 p-1 rounded-full inline-flex text-gray-400 hover:bg-gray-200 hover:text-gray-500">
                                        <span class="sr-only">Remove filter for Objects</span>
                                        <svg class="h-2 w-2" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                                            <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
                                        </svg>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- LG NAV -->
        <aside class="hidden lg:block">
            <form class="divide-y divide-gray-200 space-y-6 bg-gray-800 p-4 rounded-2xl">

            <div>
            <fieldset>
                <div class="space-y-3">

                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input wire:model="searchFilter" type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nombre">
                </div>

            </fieldset>
            </div>

            <div class="pt-6">
                <fieldset>
                <legend class="block font-medium text-gray-300">Categorias</legend>
                <div class="pt-4 space-y-3">
                    <div class="flex items-center">
                        <input wire:model="categoryFilter" id="all" name="category" value="" type="radio" class="h-4 w-4 border-gray-300 rounded-full text-indigo-600 focus:ring-indigo-500" checked>
                        <label for="all" class="ml-3 text-sm text-gray-400"> Todos </label>
                    </div>
                    @foreach ( $categories as $category )
                        <div class="flex items-center">
                            <input wire:model="categoryFilter" id="{{ $category->id }}" name="category" value="{{ $category->id }}" type="radio" class="h-4 w-4 border-gray-300 rounded-full text-indigo-600 focus:ring-indigo-500">
                            <label for="{{ $category->id }}" class="ml-3 text-sm text-gray-400"> {{ $category->name }} </label>
                        </div>
                    @endforeach
                </div>
                </fieldset>
            </div>

            <div class="pt-6">
                <fieldset>
                <legend class="block font-medium text-gray-300">Edad recomendada</legend>
                <div class="pt-4 space-y-3">

                    @foreach ( $pegis as $pegi )
                        <div class="flex items-center">
                            <input wire:model="ageFilter"  id="{{ $pegi }}" name="edad" value="{{ $pegi }}" type="radio" class="h-4 w-4 border-gray-300 rounded-full text-indigo-600 focus:ring-indigo-500">
                            <label for="{{ $pegi }}" class="ml-3 text-sm text-gray-400"> {{ $pegi }} </label>
                        </div>
                    @endforeach

                </div>
                </fieldset>
            </div>

            <div class="pt-6 pb-2">
                <fieldset>
                <legend class="block font-medium text-gray-300">Formato</legend>
                <div class="pt-4 space-y-3">
                    
                    <div class="flex items-center">
                        <input id="fisico" name="tipo" value="fisico" type="radio" class="h-4 w-4 border-gray-300 rounded-full text-indigo-600 focus:ring-indigo-500">
                        <label for="fisico" class="ml-3 text-sm text-gray-400"> Ambos </label>
                    </div>

                    <div class="flex items-center">
                        <input id="fisico" name="tipo" value="fisico" type="radio" class="h-4 w-4 border-gray-300 rounded-full text-indigo-600 focus:ring-indigo-500">
                        <label for="fisico" class="ml-3 text-sm text-gray-400"> Físico </label>
                    </div>

                    <div class="flex items-center">
                        <input id="digital" name="tipo" value="" type="radio" class="h-4 w-4 border-gray-300 rounded-full text-indigo-600 focus:ring-indigo-500">
                        <label for="digital" class="ml-3 text-sm text-gray-400"> Digital </label>
                    </div>

                </div>
                </fieldset>
            </div>
            </form>
        </aside>

        <!-- Product grid -->
        <div class="relative grid grid-cols-2 md:grid-cols-3 gap-4 mt-6 lg:mt-0 lg:col-span-2 xl:col-span-3 border-dashed border-gray-200 rounded-lg">
            
            <div class="hidden absolute lg:block" style="top: -30px">
                <h1 class="text-gray-300">{{count($games)}} resultados</h1>
            </div>
            <!-- Replace with your content -->
            @foreach ($games as $game)
            @if($game->stock === 0) 
            <div class="max-w-sm rounded shadow-card grayscale">
            @else 
            <div class="max-w-sm rounded shadow-card"> 
                <a href="/game/{{ $game->id }}">
            @endif
                    
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
                        
                @if($game->stock !== 0) 
                </a>
                @endif

                </div>
            @endforeach
            <!-- /End replace -->
            </div>
        </div>
    </div>
</main>