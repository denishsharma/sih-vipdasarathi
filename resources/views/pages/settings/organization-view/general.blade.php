@extends('layouts.general', ['activeButton' => 'overview'])

@section('navbar-attached')
    <nav class="">
        <div class="mx-auto px-2 sm:px-6 lg:px-20">
            <div class="relative flex items-center justify-between h-16 gap-10">
                <div class="">
                    @yield('breadcrumb')
                </div>
                <div class="">
                    <div class="container">
                        <x-button label="Add New Volunteer" @click="$openModal('editOrganization')"></x-button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-gray-100 h-px"></div>
@endsection

@section('content')
    <div class="mx-auto px-20 py-10">
        <div class="mx-auto grid overflow-hidden grid-cols-4 grid-rows-1 gap-10 lg:w-10/12 sm:w-auto">
            <div class="row-end-auto col-start-1 grid grid-cols-1 gap-5">
                <div class="h-fit w-10/12 mx-auto">
                    <div class="grid grid-cols-1 gap-1">
                        <a href="{{ route('settings.manage.organizations.View.overview') }}" class="{{ ($activeSection=='overview') ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="identification" class="w-4.5 h-4.5" />
                            <span>Overview</span>
                        </a>
                        <a href="{{ route('settings.manage.organizations.View.permission') }}" class="{{ ($activeSection=='permission') ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="database" class="w-4.5 h-4.5" />
                            <span>Permissions</span>
                        </a>
                        <a href="{{ route('settings.manage.organizations.View.users') }}" class="{{ ($activeSection=='user') ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="document-text" class="w-4.5 h-4.5" />
                            <span>Users</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row-end-auto col-start-2 col-span-3 h-fit">
                @yield('main-content')
            </div>
        </div>
    </div>
@endsection