@extends('layouts.main')
    @section('title') Registros @endsection
    @section('content')
        <livewire:registro.newRegistro/> 
        <livewire:registro.listRegistro/> 
    @endsection