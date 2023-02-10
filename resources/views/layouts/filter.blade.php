<div class="">
  <div>

    <main class="max-w-2xl mx-auto py-8 px-4 sm:py-10 sm:px-6 lg:max-w-7xl lg:px-8">
      <div class="pb-2">
        <h1 class="text-4xl font-extrabold tracking-tight text-gray-300">Nuestro catálogo</h1>
        <p class="mt-4 text-base text-gray-500">¡Busca el juego que encaja con tu gamemode!</p>
      </div>

      <div class="pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
            <div class="lg:hidden">
                  <!-- Filters -->
                <section aria-labelledby="filter-heading">
                    <h2 id="filter-heading" class="sr-only">Filters</h2>

                    <div class="relative z-10  border-b border-gray-200 pb-4">
                    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between sm:px-6 lg:px-8">
                        <div class="relative inline-block text-left">
                        <div>
                            <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                            Sort
                            <!-- Heroicon name: solid/chevron-down -->
                            <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            </button>
                        </div>

                        <!--
                            Dropdown menu, show/hide based on menu state.
                            Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                            Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div class="origin-top-left absolute left-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                            <!--
                                Active: "bg-gray-100", Not Active: ""
                                Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                            -->
                            <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0"> Most Popular </a>

                            <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1"> Best Rating </a>

                            <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2"> Newest </a>
                            </div>
                        </div>
                        </div>

                        <!-- Mobile filter dialog toggle, controls the 'mobileFiltersOpen' state. -->
                        <button type="button" class="inline-block text-sm font-medium text-gray-700 hover:text-gray-900 sm:hidden">Filters</button>

                        <div class="hidden sm:block">
                        <div class="flow-root">
                            <div class="-mx-4 flex items-center divide-x divide-gray-200">
                            <div class="px-4 relative inline-block text-left">
                                <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                                <span>Category</span>

                                <span class="ml-1.5 rounded py-0.5 px-1.5 bg-gray-200 text-xs font-semibold text-gray-700 tabular-nums">1</span>
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                                </button>

                                <!--
                                'Category' dropdown, show/hide based on dropdown state.
                                Entering: "transition ease-out duration-100"
                                    From: "transform opacity-0 scale-95"
                                    To: "transform opacity-100 scale-100"
                                Leaving: "transition ease-in duration-75"
                                    From: "transform opacity-100 scale-100"
                                    To: "transform opacity-0 scale-95"
                                -->
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
                                <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                                <span>Color</span>
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                                </button>

                                <!--
                                'Color' dropdown, show/hide based on dropdown state.
                                Entering: "transition ease-out duration-100"
                                    From: "transform opacity-0 scale-95"
                                    To: "transform opacity-100 scale-100"
                                Leaving: "transition ease-in duration-75"
                                    From: "transform opacity-100 scale-100"
                                    To: "transform opacity-0 scale-95"
                                -->
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
                                <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                                <span>Sizes</span>
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                                </button>

                                <!--
                                'Sizes' dropdown, show/hide based on dropdown state.
                                Entering: "transition ease-out duration-100"
                                    From: "transform opacity-0 scale-95"
                                    To: "transform opacity-100 scale-100"
                                Leaving: "transition ease-in duration-75"
                                    From: "transform opacity-100 scale-100"
                                    To: "transform opacity-0 scale-95"
                                -->
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
                        Filters
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

            <div class="hidden lg:block">
                <form class="divide-y divide-gray-200 space-y-10">
                <div>
                    <fieldset>
                    <legend class="block text-sm font-medium text-gray-300">Color</legend>
                    <div class="pt-6 space-y-3">
                        <div class="flex items-center">
                        <input id="color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="color-0" class="ml-3 text-sm text-gray-600"> White </label>
                        </div>

                        <div class="flex items-center">
                        <input id="color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="color-1" class="ml-3 text-sm text-gray-600"> Beige </label>
                        </div>

                        <div class="flex items-center">
                        <input id="color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="color-2" class="ml-3 text-sm text-gray-600"> Blue </label>
                        </div>

                        <div class="flex items-center">
                        <input id="color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="color-3" class="ml-3 text-sm text-gray-600"> Brown </label>
                        </div>

                        <div class="flex items-center">
                        <input id="color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="color-4" class="ml-3 text-sm text-gray-600"> Green </label>
                        </div>

                        <div class="flex items-center">
                        <input id="color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="color-5" class="ml-3 text-sm text-gray-600"> Purple </label>
                        </div>
                    </div>
                    </fieldset>
                </div>

                <div class="pt-10">
                    <fieldset>
                    <legend class="block text-sm font-medium text-gray-300">Category</legend>
                    <div class="pt-6 space-y-3">
                        <div class="flex items-center">
                        <input id="category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="category-0" class="ml-3 text-sm text-gray-600"> All New Arrivals </label>
                        </div>

                        <div class="flex items-center">
                        <input id="category-1" name="category[]" value="tees" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="category-1" class="ml-3 text-sm text-gray-600"> Tees </label>
                        </div>

                        <div class="flex items-center">
                        <input id="category-2" name="category[]" value="crewnecks" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="category-2" class="ml-3 text-sm text-gray-600"> Crewnecks </label>
                        </div>

                        <div class="flex items-center">
                        <input id="category-3" name="category[]" value="sweatshirts" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="category-3" class="ml-3 text-sm text-gray-600"> Sweatshirts </label>
                        </div>

                        <div class="flex items-center">
                        <input id="category-4" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="category-4" class="ml-3 text-sm text-gray-600"> Pants &amp; Shorts </label>
                        </div>
                    </div>
                    </fieldset>
                </div>

                <div class="pt-10">
                    <fieldset>
                    <legend class="block text-sm font-medium text-gray-300">Sizes</legend>
                    <div class="pt-6 space-y-3">
                        <div class="flex items-center">
                        <input id="sizes-0" name="sizes[]" value="xs" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="sizes-0" class="ml-3 text-sm text-gray-600"> XS </label>
                        </div>

                        <div class="flex items-center">
                        <input id="sizes-1" name="sizes[]" value="s" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="sizes-1" class="ml-3 text-sm text-gray-600"> S </label>
                        </div>

                        <div class="flex items-center">
                        <input id="sizes-2" name="sizes[]" value="m" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="sizes-2" class="ml-3 text-sm text-gray-600"> M </label>
                        </div>

                        <div class="flex items-center">
                        <input id="sizes-3" name="sizes[]" value="l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="sizes-3" class="ml-3 text-sm text-gray-600"> L </label>
                        </div>

                        <div class="flex items-center">
                        <input id="sizes-4" name="sizes[]" value="xl" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="sizes-4" class="ml-3 text-sm text-gray-600"> XL </label>
                        </div>

                        <div class="flex items-center">
                        <input id="sizes-5" name="sizes[]" value="2xl" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <label for="sizes-5" class="ml-3 text-sm text-gray-600"> 2XL </label>
                        </div>
                    </div>
                    </fieldset>
                </div>
                </form>
            </div>
            </aside>

            <!-- Product grid -->
            <div class="mt-6 lg:mt-0 lg:col-span-2 xl:col-span-3">
            <!-- Replace with your content -->
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96 lg:h-full"></div>
            <!-- /End replace -->
            </div>
        </div>
    </main>
  </div>
</div>
