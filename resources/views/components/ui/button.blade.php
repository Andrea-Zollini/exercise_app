<button {{$attributes->merge(['class' => 'px-4 py-3 font-semibold text-white bg-orange-600 rounded-lg shadow-md hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-75"'])}}>
    {{ $slot }}
</button>