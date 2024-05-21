<x-layouts.app title="Dashboard">
    <div class="flex flex-col items-center justify-center h-full">
        <livewire:form>
            <form action="{{route('logout')}}" method="POST" class="mt-10">
                @csrf
                <button class="px-4 py-2 font-bold text-gray-200 bg-orange-600 rounded shadow-md hover:bg-orange-800" type="submit">log out</button>
            </form>
    </div>
</x-layouts.app>
