@extends('layouts.baselw')

@section('body')
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
