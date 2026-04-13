@extends('layouts.layout')

@php
    use App\Models\Appointment;
@endphp

@section('hideNavbar', true)
@section('content')
    @include('pages.appointments.partials.form', [
        'appointment' => $appointment,
        'method' => 'PUT',
        'action' => route('appointments.update'),
        'submitLabel' => 'Update Appointment'
    ])
@endsection