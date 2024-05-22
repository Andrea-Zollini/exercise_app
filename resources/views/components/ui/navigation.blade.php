<div class="flex justify-between px-3 py-8">
    <div>
        <h3 class="font-bold uppercase">Exercise App</h3>
    </div>

    <nav>
        <ul class="flex space-x-3">
            <li><a href="{{ route('auth:login') }}">Login</a></li>
            <li><a href="{{ route('auth:register') }}" class="px-4 py-3 font-semibold text-white bg-orange-600 rounded-lg shadow-md hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-75">Get Started</a></li>
        </ul>
    </nav>
</div>
