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
    case actions
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
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <caption
                            class="px-5 py-3 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            @if ($activeSection == 'all')
                                All Cases
                            @elseif ($activeSection == 'active')
                                Active Cases
                            @elseif ($activeSection == 'pending')
                                Pending Cases
                            @elseif ($activeSection == 'closed')
                                Closed Cases
                            @endif
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list
                                of
                                Flowbite products
                                designed to help you
                                work and play, stay
                                organized, get answers,
                                keep in touch, grow
                                your business, and
                                more.
                            </p>
                        </caption>
                        <thead class="text-xs font-normal text-gray-500 uppercase bg-stone-100">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Case Name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Color
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Category
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Price
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                                        <h4 class="text-sm font-medium text-gray-700">Gurujat</h4>
                                        <span class="text-xs font-regular text-gray-500">weqweqeqweqe</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    Sliver
                                </td>
                                <td class="py-4 px-6">
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Default</span>
                                </td>
                                <td class="py-4 px-6">
                                    $2999
                                </td>
                                <td class="py-4 px-6 text-right">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Microsoft Surface Pro
                                </th>
                                <td class="py-4 px-6">
                                    White
                                </td>
                                <td class="py-4 px-6">
                                    Laptop PC
                                </td>
                                <td class="py-4 px-6">
                                    $1999
                                </td>
                                <td class="py-4 px-6 text-right">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Magic Mouse 2
                                </th>
                                <td class="py-4 px-6">
                                    Black
                                </td>
                                <td class="py-4 px-6">
                                    Accessories
                                </td>
                                <td class="py-4 px-6">
                                    $99
                                </td>
                                <td class="py-4 px-6 text-right">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
