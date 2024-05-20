<x-layouts.app title="Dashboard">
    <h1 class="font-3xl">Hi {{Auth::user()->name}}</h1>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button class="bg-orange-600 hover:bg-orange-800 text-gray-200 font-bold py-2 px-4 rounded shadow-md" type="submit">log out</button>
    </form>
</x-layouts.app>
