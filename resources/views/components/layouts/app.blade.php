@props(['title' => config('app.name'), 'heading' => 'test'])

<x-layouts.page title="{{$title}}">
    {{$slot}}
</x-layouts.page>