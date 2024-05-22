<x-layouts.guest title="Index Page">
    <x-ui.navigation />
    <x-ui.container class="flex flex-col items-center justify-around">
            <h1 class="px-6 mt-10 font-bold text-center leading-1 text-7xl">App to manage your workouts, <br class="hidden lg:block"> (maybe)</h1>
            <x-ui.button class="mt-10">
                <a href="{{route('auth:register')}}">Start Now</a>
            </x-ui.button>
    </x-ui.container>
</x-layouts.guest>
