@extends('layouts.app')

@section('content')

    @livewire('single-employee', ['id' => $employee->id])

@endsection
