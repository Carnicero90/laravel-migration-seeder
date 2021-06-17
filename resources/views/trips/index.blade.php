@extends('layouts.app')
@section('main_content')
    @dump(Trip::all())
@endsection