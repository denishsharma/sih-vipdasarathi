@extends('layouts.general', ['activeButton' => 'setting'])

@section('content')
    <div class="mx-auto px-20 py-10">
        <div class="mx-auto grid overflow-hidden grid-cols-4 grid-rows-1 gap-10 lg:w-10/12 sm:w-auto">
            <div class="row-end-auto col-start-1 grid grid-cols-1 gap-5">
                <div class="h-fit w-10/12 mx-auto">
                    <a href="{{ route('setting.organization.views.general') }}"
                        class="{{ $setting == 'general' ? 'active-setting-button' : 'is-setting-button' }}">
                        <x-icon name="cog" class="w-4.5 h-4.5" />
                        <span>General</span>
                    </a>

                    <div class="mt-5">
                        <h4 class="ml-3 text-gray-400 uppercase text-xs mb-2 font-medium">Manage</h4>
                        <div class="grid grid-cols-1 gap-1">
                            <a href="{{ route('setting.organization.views.permission') }}"
                                class="{{ $setting == 'permissions' ? 'active-setting-button' : 'is-setting-button' }}">
                                <x-icon name="shield-exclamation" class="w-4.5 h-4.5" />
                                <span>Permissions</span>
                            </a>
                            <a href="{{ route('setting.organization.views.user') }}"
                                class="{{ $setting == 'users' ? 'active-setting-button' : 'is-setting-button' }}">
                                <x-icon name="user" class="w-4.5 h-4.5" />
                                <span>Users</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row-end-auto col-start-2 col-span-3 h-fit">
                @yield('setting-content')
            </div>
        </div>
    </div>
@endsection
