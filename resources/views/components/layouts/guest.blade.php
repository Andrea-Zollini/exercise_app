@props(['title' => config('app.name'), 'heading' => 'boh'])

<x-layouts.page title="{{$title}}" heading="{{$heading}}">
    {{$slot}}
</x-layouts.page>