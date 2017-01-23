@extends('layouts.master')


@section('contingut')

<div class="row">

    <div class="col-sm-4">

        <img src="{{ $peli['poster'] }}" />

    </div>
    <div class="col-sm-8">

        <h1>{{ $peli["title"] }}</h1>
        <h2>Any: <b>{{ $peli["year"] }}</b></h2>
        <h2>Director: <b>{{ $peli["director"] }}</b></h2>

        <p>Estat: 
        @if( $peli["rented"] )
        	Llogada<br>
        	<button type="button" class="btn btn-danger">Tornar peli</button>
        @else
        	Disponible<br>
        	<button type="button" class="btn btn-primary">Llogar peli</button>
        @endif

        <button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/catalog/{{$id}}/edit'">
        	<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar peli</button>
        <button type="button" class="btn btn-default" onclick="window.history.back()">
        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Tornar</button>

        <p>Sinopsi: {{ $peli["synopsis"] }}</p>

    </div>
</div>

@endsection
