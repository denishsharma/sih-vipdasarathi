@extends('layouts.general', ['activeButton' => 'cases'])

@section('content')
    <div class="mx-auto px-20 py-10">
        <div class="mx-auto grid overflow-hidden grid-cols-4 grid-rows-1 gap-10 lg:w-10/12 sm:w-auto">
            <div class="row-end-auto col-start-1 grid grid-cols-1 gap-5">
                <div class="h-fit w-10/12 mx-auto">
                    <div class="grid grid-cols-1 gap-1">
                        <a href="{{ route('case.view.overview', ['signature' => '123']) }}"
                            class="{{ $activeSection == 'overview' ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="identification" class="w-4.5 h-4.5" />
                            <span>Overview</span>
                        </a>
                        <a href="{{ route('case.view.teams', ['signature' => '123']) }}"
                            class="{{ $activeSection == 'teams' ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="database" class="w-4.5 h-4.5" />
                            <span>Teams</span>
                        </a>
                        <a href="{{ route('case.view.tasks', ['signature' => 'ccc']) }}"
                            class="{{ $activeSection == 'tasks' ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="document-text" class="w-4.5 h-4.5" />
                            <span>Tasks</span>
                        </a>
                        <a href="{{ route('case.view.demand', ['signature' => 'ccc']) }}"
                            class="{{ $activeSection == 'demands' ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="document-text" class="w-4.5 h-4.5" />
                            <span>Demands</span>
                        </a>
                        <a href="{{ route('case.view.decisions', ['signature' => 'this']) }}"
                            class="{{ $activeSection == 'decisions' ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="document-text" class="w-4.5 h-4.5" />
                            <span>Decisions</span>
                        </a>
                        <a href="{{ route('case.view.ticket', ['signature' => 'this']) }}"
                            class="{{ $activeSection == 'tickets' ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="document-text" class="w-4.5 h-4.5" />
                            <span>Tickets</span>
                        </a>
                        <a href="{{ route('case.view.reports', ['signature' => 'sss']) }}"
                            class="{{ $activeSection == 'reports' ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="document-text" class="w-4.5 h-4.5" />
                            <span>Reports</span>
                        </a>
                        <a href="{{ route('case.view.volunteer', ['signature' => 'sss']) }}"
                            class="{{ $activeSection == 'volunteers' ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="document-text" class="w-4.5 h-4.5" />
                            <span>Volunteers</span>
                        </a>
                        <a href="{{ route('case.view.shelters', ['signature' => 'iii']) }}"
                            class="{{ $activeSection == 'shelters' ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="document-text" class="w-4.5 h-4.5" />
                            <span>Shelter</span>
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
