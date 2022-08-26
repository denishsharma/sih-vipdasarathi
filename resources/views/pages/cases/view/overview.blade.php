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
                    <a href="{{ route('case.view.overview', ['signature' => '123']) }}"
                        class="ml-1 text-sm font-medium text-gray-400 hover:text-gray-700 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{ $caseTitle }}</a>
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

        <div class="row-end-auto col-start-2 col-span-3 bg-gray-50">
            <div class="overflow-x-auto border border-gray-200 rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <caption
                        class="px-5 py-3 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Active Cases
                        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of
                            Flowbite products
                            designed to help you
                            work and play, stay
                            organized, get answers,
                            keep in touch, grow
                            your business, and
                            more.</p>

                        <div class="pt-3 pb-2 flex flex-row gap-2">
                            <x-button xs primary label="Add New Case" @click="$openModal('createCase')" />
                            <x-button xs label="Generate Report" />
                            <x-button xs label="Change Status" />
                            <x-button xs label="Tickets" @click="$openModal('createTicket')" />
                            <x-button xs label="Volunteer" @click="$openModal('createVolunteerDetails')" />
                        </div>
                        <div class="flex gap-x-6">
                            <div>
                                <a href="#"
                                    class="block w-60 mt-4 mb-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">70</h5>
                                    <p class="font-normal text-gray-700 dark:text-gray-400">Number of Death</p>
                                </a>
                            </div>
                            <div>
                                <a href="#"
                                    class="block w-60 mt-4 mb-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">200</h5>
                                    <p class="font-normal text-gray-700 dark:text-gray-400">Number of Casualties</p>
                                </a>
                            </div>
                            <div>
                                <a href="#"
                                    class="block w-60 mt-4 mb-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">70</h5>
                                    <p class="font-normal text-gray-700 dark:text-gray-400">Rescued</p>
                                </a>
                            </div>
                            <caption
                            class="px-5 py-3 mb-4 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Active Task
                                </caption>
                        </div>
                    </caption>
                    <thead class="text-xs font-normal text-gray-500 uppercase bg-stone-100">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Task Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Subject
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Task Type
                            </th>
                            <th scope="col" class="py-3 px-6">
                               Description
                            </th>
                            <th scope="col" class="py-3 px-6">
                               Priority
                            </th>
                            <th scope="col" class="py-3 px-6">
                               Attachment
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                                    <h4 class="text-sm font-medium text-gray-700">Gurujat</h4>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                Sliver
                            </td>
                            <td class="py-4 px-6">
                                Sliver-n
                            </td>
                            <td class="py-4 px-6">
                                xyz desp
                            </td>

                            <td class="py-4 px-6">
                                <span
                                        class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-red-800">Low</span>
                            </td>

                            <td class="py-4 px-6">
                                <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View
                                        SOP</a>
                            </td>

                        </tr>

                    </tbody>
                </table>

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <caption
                        class="px-5 py-3 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        {{-- @if ($activeSection == 'all')
                            All Teams
                        @elseif ($activeSection == 'active')
                            Active Teams
                        @elseif ($activeSection == 'inactive')
                            Inactive Teams
                        @endif --}}
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
                                Team Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Team Type
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

                            <td class="py-4 px-6">
                                <h4 class="text-sm font-medium text-gray-700">Delta Squad</h4>
                            </td>
                            <td class="py-4 px-6">
                                Recue
                            </td>
                            <td class="py-4 px-6">
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-800">Active</span>
                            </td>

                            <td class="py-4 px-6 text-right flex items-center justify-end gap-3">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Members</a>
                                <a href="{{ route('team.view.overview', ['signature' => '123']) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <td class="py-4 px-6">
                                <h4 class="text-sm font-medium text-gray-700">Delta Squad</h4>
                            </td>
                            <td class="py-4 px-6">
                                Recue
                            </td>

                            <td class="py-4 px-6">
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-800">Inactive</span>
                            </td>

                            <td class="py-4 px-6 text-right flex items-center justify-end gap-3">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Members</a>
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <td class="py-4 px-6">
                                <h4 class="text-sm font-medium text-gray-700">Delta Squad</h4>
                            </td>
                            <td class="py-4 px-6">
                                Rescue
                            </td>
                            <td class="py-4 px-6">
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-800">Inactive</span>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>

        </div>
    @endsection
