<x-layouts.app title="Dashboard">
    <div class="flex items-center justify-center h-full">
        <p>{{$user->name}}</p>
        <p>{{$user->age}}</p>
        <p>{{$user->initial_weight}}</p>
        <p>{{$user->target_weight}}</p>
    </div>
</x-layouts.app>
