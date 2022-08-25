@extends('layouts.general', ['activeButton' => 'setting'])

@section('content')
    <div class="mx-auto px-20 py-10">
        <div class="mx-auto grid overflow-hidden grid-cols-4 grid-rows-1 gap-10 lg:w-10/12 sm:w-auto">
            <div class="row-end-auto col-start-1 grid grid-cols-1 gap-5">
                <div class="h-fit w-10/12 mx-auto">
                    <div class="grid grid-cols-1 gap-1">
                        <a href="{{ route('setting.organization.view.overview', ['signature' => '999']) }}" class="{{ ($activeSection=='overview') ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="identification" class="w-4.5 h-4.5" />
                            <span>Overview</span>
                        </a>
                        <a href="{{ route('setting.organization.view.permission', ['signature' => '999']) }}" class="{{ ($activeSection=='permission') ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="identification" class="w-4.5 h-4.5" />
                            <span>Permission</span>
                        </a>
                        <a href="{{ route('setting.organization.view.users', ['signature' => '999']) }}" class="{{ ($activeSection=='users') ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="identification" class="w-4.5 h-4.5" />
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
