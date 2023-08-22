<x-layout>
@if (!$pictures->isEmpty())

@foreach ($pictures as $picture)

<h2> {{$picture->title}}</h2>

<p>{{$picture->description}}</p>

<p>€ {{$picture->price}}</p>

@endforeach

@else

<p>Non ci sono quadri</p>

@endif



</x-layout>