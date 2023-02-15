<x-app-layout>
    <livewire:cart :currentOrder="Auth::user()->orders->where('paid', 0)->last()" />
</x-app-layout>