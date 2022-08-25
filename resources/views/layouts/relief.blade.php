@extends('layouts.general', ['activeButton' => 'relief'])

@section('content')
    <div class="mx-auto px-20 py-10">
        <div class="mx-auto grid overflow-hidden grid-cols-4 grid-rows-1 gap-10 lg:w-10/12 sm:w-auto">
            <div class="row-end-auto col-start-1 grid grid-cols-1 gap-5">
                <div class="h-fit w-10/12 mx-auto grid grid-cols-1 gap-5">
                    <a href="{{ route('relief.demand-of-resource') }}" class="{{ $relief == 'demand-of-resource' ? 'active-setting-button' : 'is-setting-button' }}">
                        <x-icon name="cube" class="w-4.5 h-4.5" />
                        <span>Resource Demand</span>
                    </a>
                    <a href="{{ route('relief.shelter') }}" class="{{ $relief == 'shelter' ? 'active-setting-button' : 'is-setting-button' }}">
                        <x-icon name="home" class="w-4.5 h-4.5" />
                        <span>Shelter</span>
                    </a>
                    <a href="{{ route('relief.hospital') }}"
                        class="{{ $relief == 'hospital' ? 'active-setting-button' : 'is-setting-button' }}">
                        <x-icon name="plus-circle" class="w-4.5 h-4.5" />
                        <span>Medical Facilities</span>
                    </a>

                    <div class="mt-5">
                        <h4 class="ml-3 text-gray-400 uppercase text-xs mb-2 font-medium">Manage Resources</h4>
                        <div class="grid grid-cols-1 gap-1">
                            <a href="{{ route('relief.equipments') }}"
                                class="{{ $relief == 'equipments' ? 'active-setting-button' : 'is-setting-button' }}">
                                <x-icon name="cube-transparent" class="w-4.5 h-4.5" />
                                <span>Equipments</span>
                            </a>
                            <a href="{{ route('relief.foods') }}"
                                class="{{ $relief == 'foods' ? 'active-setting-button' : 'is-setting-button' }}">
                                <x-icon name="chart-pie" class="w-4.5 h-4.5" />
                                <span>Foods</span>
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
