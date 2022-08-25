@extends('layouts.general', ['activeButton' => 'ticket'])

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
                        class="ml-1 text-sm font-medium text-gray-400 hover:text-gray-700 md:ml-2 dark:text-gray-400 dark:hover:text-white">Tickets</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <x-icon name="chevron-right" class="w-3 h-3 text-gray-400" />
                    <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-400">
                        @if ($activeSection == 'all')
                            All Tickets
                        @elseif ($activeSection == 'active')
                            Active Tickets
                        @elseif ($activeSection == 'pending')
                            Pending Tickets
                        @elseif ($activeSection == 'closed')
                            Closed Tickets
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
                        <a href="{{ route('ticket.all') }}"
                            class="{{ $activeSection == 'all' ? 'active-setting-button' : 'is-setting-button' }}">
                            <x-icon name="collection" class="w-4.5 h-4.5" />
                            <span>All Tickets</span>
                        </a>
                    </div>

                    <div class="mt-5">
                        <h4 class="ml-3 text-gray-400 uppercase text-xs mb-2 font-medium">Status</h4>
                        <div class="grid grid-cols-1 gap-1">
                            <a href="{{ route('ticket.active') }}"
                                class="{{ $activeSection == 'active' ? 'active-setting-button' : 'is-setting-button' }}">
                                <x-icon name="dots-circle-horizontal" class="w-4.5 h-4.5" />
                                <span>Active Ticket</span>
                            </a>
                            <a href="{{ route('ticket.pending') }}"
                                class="{{ $activeSection == 'pending' ? 'active-setting-button' : 'is-setting-button' }}">
                                <x-icon name="question-mark-circle" class="w-4.5 h-4.5" />
                                <span>Pending Tickets</span>
                            </a>
                            <a href="{{ route('ticket.closed') }}"
                                class="{{ $activeSection == 'closed' ? 'active-setting-button' : 'is-setting-button' }}">
                                <x-icon name="check-circle" class="w-4.5 h-4.5" />
                                <span>Closed Tickets</span>
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
                                All Tickets
                            @elseif ($activeSection == 'active')
                                Active Tickets
                            @elseif ($activeSection == 'pending')
                                Pending Tickets
                            @elseif ($activeSection == 'closed')
                                Closed Tickets
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
                                    Task Title
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Ticket Subject
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Ticket Description
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    DateTime
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Status
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
                                    <h4 class="text-sm font-medium text-gray-700">Supply medical supplies</h4>
                                </td>
                                <td class="py-4 px-6">
                                    Not enough supplies
                                </td>
                                <td class="py-4 px-6">
                                    Send the supplies
                                </td>
                                <td class="py-4 px-6">
                                    23 August, 2023
                                </td>
                                <td class="py-4 px-6">
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-800">Active</span>
                                </td>

                                <td class="py-4 px-6 text-right">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                    <h4 class="text-sm font-medium text-gray-700">Supply medical supplies</h4>
                                </td>
                                <td class="py-4 px-6">
                                    Not enough supplies
                                </td>
                                <td class="py-4 px-6">
                                    Send the supplies
                                </td>
                                <td class="py-4 px-6">
                                    23 August, 2023
                                </td>
                                <td class="py-4 px-6">
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-800">Active</span>
                                </td>

                                <td class="py-4 px-6 text-right">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                    <h4 class="text-sm font-medium text-gray-700">Supply medical supplies</h4>
                                </td>
                                <td class="py-4 px-6">
                                    Not enough supplies
                                </td>
                                <td class="py-4 px-6">
                                    Send the supplies
                                </td>
                                <td class="py-4 px-6">
                                    23 August, 2023
                                </td>
                                <td class="py-4 px-6">
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-800">Active</span>
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
