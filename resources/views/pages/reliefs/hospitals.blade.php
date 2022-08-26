@extends('layouts.relief', ['relief' => 'hospital'])

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
                       class="ml-1 text-sm font-medium text-gray-400 hover:text-gray-700 md:ml-2 dark:text-gray-400 dark:hover:text-white">Relief</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <x-icon name="chevron-right" class="w-3 h-3 text-gray-400" />
                    <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-400">Hospital</span>
                </div>
            </li>
        </ol>
    </nav>
@endsection

@section('navbar-attached-actions')
    Hospital actions
@endsection

@section('setting-content')
    <div class="overflow-x-auto border border-gray-200 rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="px-5 py-3 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Volunteer Profiles
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Some description</p>
            </caption>
            <thead class="text-xs font-normal text-gray-500 uppercase bg-stone-100">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Hospital Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Location
                </th>
                <th scope="col" class="py-3 px-6">
                    Contact Number
                </th>

            </tr>
            </thead>
            <tbody class="divide-y">
            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <h4 class="text-sm font-medium text-gray-700">ESIS Hospital</h4>
                </td>
                <td class="py-4 px-6">
                    Mulund
                </td>

                <td class="py-4 px-6">
                    +91 9082905016
                </td>

            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <h4 class="text-sm font-medium text-gray-700">Astha Hospital</h4>
                </td>
                <td class="py-4 px-6">
                    Mulund
                </td>

                <td class="py-4 px-6">
                    +91 9082905016
                </td>

            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <h4 class="text-sm font-medium text-gray-700">Fortis Hospital</h4>
                </td>
                <td class="py-4 px-6">
                    Mulund
                </td>

                <td class="py-4 px-6">
                    +91 9082905016
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
