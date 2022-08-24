@extends('layouts.empty')

@section('navbar-attached')
    <nav class="">
        <div class="mx-auto px-2 sm:px-6 lg:px-20">
            <div class="relative flex items-center justify-between h-16 gap-10">
                <h4 class="font-medium text-lg text-gray-700">Settings</h4>
                <div class="">
                    <div class="container">
                        <x-button label="Default" @click="$openModal('editOrganization')"></x-button>
                        <x-button label="Edit User" @click="$openModal('editUserDetails')"></x-button>
                        <x-button label="Edit Task" @click="$openModal('editTaskDetails')"></x-button>
                        <x-button label="Create Resource Demand" @click="$openModal('createDemandOfResources')"></x-button>
                    </div>
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
