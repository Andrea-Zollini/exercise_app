@props(['src', 'alt'])

<img {{$attributes->merge(['class' => 'w-auto h-10 mx-auto mt-10'])}} src="{{$src}}" alt="{{$alt}}">