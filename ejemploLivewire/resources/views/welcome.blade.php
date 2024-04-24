

@extends('layouts.app')
@extends('components.menu')

@section('title', 'Ejemplo con Livewire')
@section('content')
<livewire:counter />
<livewire:negocio />

@endsection