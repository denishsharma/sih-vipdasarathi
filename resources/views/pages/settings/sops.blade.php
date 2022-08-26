@extends('layouts.setting', ['setting' => 'sops'])

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
                        class="ml-1 text-sm font-medium text-gray-400 hover:text-gray-700 md:ml-2 dark:text-gray-400 dark:hover:text-white">Settings</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <x-icon name="chevron-right" class="w-3 h-3 text-gray-400" />
                    <span
                        class="ml-1 text-sm font-medium text-gray-400 hover:text-gray-700 md:ml-2 dark:text-gray-400 dark:hover:text-white">Manage</span>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <x-icon name="chevron-right" class="w-3 h-3 text-gray-400" />
                    <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-400">Standard Operating
                        Procedures</span>
                </div>
            </li>
        </ol>
    </nav>
@endsection

@section('navbar-attached-actions')
    sops actions
@endsection

@section('setting-content')
        <div class="overflow-x-auto border border-gray-200 rounded-lg soft-scrollbar">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption
                    class="px-5 py-3 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Standard Operating Procedures
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Some description</p>
                </caption>
                <thead class="text-xs font-normal text-gray-500 uppercase bg-stone-100">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Signature
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Disaster Type
                    </th>
                    <th scope="col" class="py-3 px-6">
                        File Type
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Created At
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody class="divide-y">
                <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="py-4 px-6">
                        SOP Earthquake 2015
                    </td>
                    <td class="py-4 px-6">
                        abcd1234
                    </td>
                    <td class="py-4 px-6">
                        Earthquake
                    </td>
                    <td class="py-4 px-6">
                        PDF
                    </td>
                    <td class="py-4 px-6">
                        12 June, 2015
                    </td>
                    <td class="py-4 px-6 text-right flex items-center justify-start gap-3">
                        <a href="https://ndrf.gov.in/sites/default/files/Eartrhquake.pdf" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                    </td>
                </tr>

                <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="py-4 px-6">
                        SOP Flood 2019
                    </td>
                    <td class="py-4 px-6">
                        floodGujrat
                    </td>
                    <td class="py-4 px-6">
                        Flood
                    </td>
                    <td class="py-4 px-6">
                        PDF
                    </td>
                    <td class="py-4 px-6">
                        12 June, 2019
                    </td>
                    <td class="py-4 px-6 text-right flex items-center justify-start gap-3">
                        <a href="https://ndrf.gov.in/sites/default/files/FLOOD.pdf" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    @endsection

