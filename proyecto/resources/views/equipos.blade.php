
@extends('layauts.landing')

@section('title','equipos')


@section('content')
<h1>Equipos</h1>

@component('_component.equipos')
@slot('title', 'equipos95/24Colombia')
@slot( 'content','Equipos de computo 1')

@endcomponent

@component('_component.equipos')
@slot('title', 'equipos95/24Colombia')
@slot( 'content','Equipos de computo 2')

@endcomponent

@component('_component.equipos')
@slot('title', 'equipos95/24Colombia')
@slot( 'content','Equipos de computo 3')

@endcomponent

@component('_component.equipos')
@slot('title', 'equipos95/24Colombia')
@slot( 'content','Equipos de computo 3')

@endcomponent

@endsection
