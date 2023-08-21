@extends('layouts/app')

@section('titulo')
    Cambio el titulo
@endsection

@section('contenido')
   <x-listar-post :posts="$posts" />
@endsection