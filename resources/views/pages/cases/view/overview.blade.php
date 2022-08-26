@extends('pages.cases.view.master', ['activeSection' => 'overview'])

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
            <li>
                <div class="flex items-center">
                    <x-icon name="chevron-right" class="w-3 h-3 text-gray-400" />
                    <a href="{{ route('case.view.overview', ['signature' => $case->signature]) }}"
                       class="ml-1 text-sm font-medium text-gray-400 hover:text-gray-700 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{ $case->title }}</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <x-icon name="chevron-right" class="w-3 h-3 text-gray-400" />
                    <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-400">Overview</span>
                </div>
            </li>
        </ol>
    </nav>
@endsection

@section('main-content')
    <div class="">
        <div class="row-end-auto col-start-2 col-span-3">
            <div class="grid grid-cols-1 gap-4">
                <div class="border border-gray-200 rounded-lg px-5 py-3">
                    <h4 class="font-medium text-2xl text-gray-700">{{ $case->title }}</h4>
                    @if(!empty($case->description))
                        <div class="text-sm text-gray-500 mt-1">{{ $case->description }}</div>
                    @else
                        <div class="text-sm text-gray-500 mt-1 text-italic">No description</div>
                    @endif

                    <div class="flex mt-5 mb-2 gap-2">
                        <x-button default sm label="Add Team" />
                        <x-button default sm label="Add Task" />
                        <x-button default sm label="Create Resource Demand" />
                        <x-button default sm label="Raise Ticket" />
                        <x-button default sm label="Edit Case Details" />
                        <x-button default sm label="Change Status" />
                    </div>
                </div>

                <div class="grid grid-cols-4 gap-4">
                    <div class="block px-5 py-3 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white">70</h5>
                        <p class="font-normal text-sm text-gray-500 dark:text-gray-400">Number of Death</p>
                    </div>
                    <div class="block px-5 py-3 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white">70</h5>
                        <p class="font-normal text-msm text-gray-500 dark:text-gray-400">Number of Death</p>
                    </div>
                    <div class="block px-5 py-3 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white">70</h5>
                        <p class="font-normal text-sm text-gray-500 dark:text-gray-400">Number of Death</p>
                    </div>
                    <div class="block px-5 py-3 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white">70</h5>
                        <p class="font-normal text-sm text-gray-500 dark:text-gray-400">Number of Death</p>
                    </div>
                </div>

                <div class="overflow-x-auto soft-scrollbar border border-gray-200 rounded-lg">
                    <livewire:components.task-table title="Active Tasks" description="All the active cases in this case" :is-for-case="$case->id" />
                </div>
            </div>
        </div>
    </div>
@endsection
