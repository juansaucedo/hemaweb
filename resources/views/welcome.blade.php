@extends('layout.master')
@section('title', "Inicio | Hema")
@section('keywords', '')
@section('content')
    @include('layout.inicio.slider')
    @include('layout.inicio.productos')
    @include('layout.inicio.renta')
    @include('layout.inicio.reparacion')
    @include('layout.inicio.rosca')
    @include('layout.common.suscripcion')
    @include('layout.contacto.form')
@endsection