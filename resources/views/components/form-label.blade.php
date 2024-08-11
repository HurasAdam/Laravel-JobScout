@props([
    'for' =>"",
    'label'=>"",
    'class' =>null   
])

@php
    // Domyślne klasy
    $defaultClasses = "block text-sm font-medium leading-6 text-gray-900";

    // Jeśli przekazano klasy, użyj ich, w przeciwnym razie użyj domyślnych
    $classes = $class ? $class : $defaultClasses;
@endphp


<label for="{{$for}}" class="{{$classes}}">{{$label}}</label>