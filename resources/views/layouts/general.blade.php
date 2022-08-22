@extends('layouts.empty')

@section('body-content')
    <div class="grid grid-cols-1 divide-y divide-gray-100">
        <livewire:components.navigation-bar />
        @yield('navbar-attached')
    </div>

    @yield('content')
@endsection
