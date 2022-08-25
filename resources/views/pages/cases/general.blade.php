@extends('layouts.general', ['activeButton' => 'case'])

@section('breadcrumb-title')
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2">
            <li class="inline-flex items-center">
                <a href="#"
                   class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-gray-700 dark:text-gray-400 dark:hover:text-white">
                    <x-icon class="w-4 h-4 mr-1 mb-0.5" name="home" solid />
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <x-icon name="chevron-right" class="w-3 h-3 text-gray-400" />
                    <a href="#"
                       class="ml-1 text-sm font-medium text-gray-400 hover:text-gray-700 md:ml-2 dark:text-gray-400 dark:hover:text-white">Cases</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <x-icon name="chevron-right" class="w-3 h-3 text-gray-400" />
                    <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-400">
                        @if ($activeSection == 'all')
                            All Cases
                        @elseif ($activeSection == 'active')
                            Active Cases
                        @elseif ($activeSection == 'pending')
                            Pending Cases
                        @elseif ($activeSection == 'closed')
                            Closed Cases
                        @endif
                    </span>
                </div>
            </li>
        </ol>
    </nav>
@endsection

@section('navbar-attached-actions')
    <div class="flex justify-end gap-2">
        <x-button sm label="Add Case" @click="Livewire.emit('openModal', 'modals.edit-case-modal', {{ json_encode(['actionType' => 'add']) }})"></x-button>
    </div>
@endsection

@section('content')
    <div class="mx-auto px-20 py-10">
        <div class="mx-auto grid overflow-hidden grid-cols-4 grid-rows-1 gap-10 lg:w-10/12 sm:w-auto">
            <div class="row-end-auto col-start-1 grid grid-cols-1 gap-5">
                <div class="h-fit w-10/12 mx-auto">
                    <div class="grid grid-cols-1 gap-1">
                        <a href="{{ route('case.all') }}"
                           class="{{ $activeSection == 'all' ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="collection" class="w-4.5 h-4.5" />
                            <span>All Cases</span>
                        </a>
                    </div>

                    <div class="mt-5">
                        <h4 class="ml-3 text-gray-400 uppercase text-xs mb-2 font-medium">Status</h4>
                        <div class="grid grid-cols-1 gap-1">
                            <a href="{{ route('case.active') }}"
                               class="{{ $activeSection == 'active' ? 'active-setting-button' : 'is-setting-button' }}">
                                <x-icon name="dots-circle-horizontal" class="w-4.5 h-4.5" />
                                <span>Active Cases</span>
                            </a>
                            <a href="{{ route('case.pending') }}"
                               class="{{ $activeSection == 'pending' ? 'active-setting-button' : 'is-setting-button' }}">
                                <x-icon name="question-mark-circle" class="w-4.5 h-4.5" />
                                <span>Pending Cases</span>
                            </a>
                            <a href="{{ route('case.closed') }}"
                               class="{{ $activeSection == 'closed' ? 'active-setting-button' : 'is-setting-button' }}">
                                <x-icon name="check-circle" class="w-4.5 h-4.5" />
                                <span>Closed Cases</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-end-auto col-start-2 col-span-3 h-fit">
                <div class="overflow-x-auto border border-gray-200 rounded-lg soft-scrollbar">
                    <livewire:components.case-table :active-section="$activeSection" :cases="(!isset($cases)) ? null : $cases" />
                </div>
            </div>
        </div>
    </div>
@endsection
