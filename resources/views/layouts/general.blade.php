@extends('layouts.empty')

@section('navbar-attached')
    <nav class="">
        <div class="mx-auto px-2 sm:px-6 lg:px-20">
            <div class="relative flex items-center justify-between h-16 gap-10">
                <div class="">
                    @yield('breadcrumb-title')
                </div>
                <div class="">
                    @yield('navbar-attached-actions')
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-gray-100 h-px"></div>
@endsection

@section('body-content')
    <div class="grid grid-cols-1 divide-y divide-gray-100">
        <livewire:components.navigation-bar :activeButton="$activeButton" />
        @yield('navbar-attached')
    </div>

    @yield('content')
@endsection
