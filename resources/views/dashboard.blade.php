<x-layouts.app title="Dashboard">
    <div class="flex flex-col items-center justify-center h-full">
        <p>{{Auth::user()->name}}</p>
        <p>{{Auth::user()->age}}</p>
        <p>{{Auth::user()->height}}</p>
        <p>{{Auth::user()->initial_weight}}</p>
        <p>{{Auth::user()->target_weight}}</p>
    </div>
</x-layouts.app>
