<x-guest-layout>
<div class="mx-auto w-full max-w-lg">
        <h1 class="relative text-2xl font-medium text-gray-300 sm:text-3xl">Pago Seguro<span class="mt-2 block h-1 w-10 bg-slate-600 sm:w-20"></span></h1>
        <form class="mt-3 flex flex-col space-y-4" wire:submit.prevent="pay" action="{{route('pay')}}" method="GET">
            <div>
                <label for="email" class="text-xs font-semibold text-gray-500">Email</label>
                <input required type="email" id="email" name="email" value="{{Auth::user()->email}}" placeholder="john.capler@fang.com" class="mt-1 block w-full rounded border-gray-300 bg-gray-50 py-3 px-4 text-sm placeholder-gray-300 shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500" />
            </div>
            <div class="relative">
                <label for="card-number" class="text-xs font-semibold text-gray-500">Card number</label>
                <input required type="text" id="card-number" name="card-number" placeholder="1234-5678-XXXX-XXXX" class="block w-full rounded border-gray-300 bg-gray-50 py-3 px-4 pr-10 text-sm placeholder-gray-300 shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500" />
            </div>
            <div>
                <p class="text-xs font-semibold text-gray-500">Expiration date</p>
                <div class="mr-6 flex flex-wrap">
                    <div class="my-1">
                        <label for="month" class="sr-only">Select expiration month</label>
                        <input required type="number" min="0" max="12" placeholder="MM" class="cursor-pointer rounded border-gray-300 bg-gray-50 py-3 px-2 text-sm shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500">
                    </div>
                    <div class="my-1 ml-3 mr-6">
                        <label for="year" class="sr-only">Select expiration year</label>
                        <input required type="number" min="0" max="30" placeholder="DD" class="cursor-pointer rounded border-gray-300 bg-gray-50 py-3 px-2 text-sm shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500">
                    </div>
                    <div class="relative my-1">
                        <label for="security-code" class="sr-only">Security code</label>
                        <input required type="number" min="0" minlength="3" maxlength="3" id="security-code" name="security-code" placeholder="Security code" class="block w-36 rounded border-gray-300 bg-gray-50 py-3 px-4 text-sm placeholder-gray-300 shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500" />
                    </div>
                </div>
            </div>
            <div>
                <label for="card-name" class="sr-only">Card name</label>
                <input required type="text" id="card-name" name="card-name" value="{{Auth::user()->name}}" placeholder="Name on the card" class="mt-1 block w-full rounded border-gray-300 bg-gray-50 py-3 px-4 text-sm placeholder-gray-300 shadow-sm outline-none transition focus:ring-2 focus:ring-teal-500" />
            </div>
            <p class="mt-10 text-center text-sm font-semibold text-gray-500">Realizando esta compra aceptas nuestros <a href="#" class="whitespace-nowrap text-teal-400 underline hover:text-teal-600">Terminos y Condiciones</a></p>
            <button type="submit" class="mt-4 inline-flex w-full items-center justify-center rounded bg-teal-600 py-2.5 px-4 text-base font-semibold tracking-wide text-white text-opacity-80 outline-none ring-offset-2 transition hover:text-opacity-100 focus:ring-2 focus:ring-teal-500 sm:text-lg">Realizar compra</button>
        </form>
      </div>
    </div>
</x-guest-layout>
