@extends('layouts.app')
@section('main_content')
<div class="card" style="width: 18rem;">
    <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Da: {{ $trip->from }} <br> il {{ $trip->start }}</h5>
      <h5 class="card-title">A: {{ $trip->to }}<br> il {{ $trip->end }}</h5>
      <p class="card-text">{{$trip->description}}</p>
      <a href="#" class="btn btn-primary">Prenota il tuo viaggio!</a>
    </div>
  </div>
@endsection