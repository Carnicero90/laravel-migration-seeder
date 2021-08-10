@extends('layouts.app')
@section('main_content')
<section class="travels">
    <h2>Le nostre offerte</h2>
    <ul>
        @foreach ($travels as $travel)
        <li>
            @@auth
                
            @endauth
            <ul class="travel-info">
                <li>Partenza: {{ $travel->from }}</li>
                <li>Destinazione: {{ $travel->to }}</li>
                <li>Data partenza: {{ $travel->start }}</li>
                <li>Data destinazione: {{ $travel->end }}</li>
                <li class="description"> <p>{{ $travel->description }}</p></li>
                <li class="details"><a href="{{ route('trips.show', ['trip' => $travel->id])}}">Dettagli viaggio</a></li>
            </ul>
        </li>   
        @endforeach
    </ul>

</section>
@endsection