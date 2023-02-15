<x-app-layout>
    @auth
        <livewire:game :game="$game"  :currentOrder="Auth::user()->orders->where('paid', 0)->last()" />
    @else 
        <livewire:game :game="$game" />
    @endauth 
</x-app-layout>