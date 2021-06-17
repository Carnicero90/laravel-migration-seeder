@extends('layouts.app')
@section('main_content')
<section class="travels">
    <h1>Le nostre offerte</h1>
    <ul>
        @foreach ($travels as $travel)
        <li>
            <ul class="travel-info">
                <li>Partenza: {{ $travel->from }}</li>
                <li>Destinazione: {{ $travel->to }}</li>
                <li>Data partenza: {{ $travel->start }}</li>
                <li>Data destinazione: {{ $travel->end }}</li>
                <li class="description"> <p>{{ $travel->description }}</p></li>
            </ul>
        </li>   
        @endforeach
    </ul>

</section>
@endsection