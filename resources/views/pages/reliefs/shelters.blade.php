@extends('layouts.relief', ['relief' => 'shelter'])

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
                    <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-400">Shelters</span>
                </div>
            </li>
        </ol>
    </nav>
@endsection

@section('navbar-attached-actions')
    Shelter actions
@endsection

@section('setting-content')
    <div class="overflow-x-auto border border-gray-200 rounded-lg">
        <div class="overflow-x-auto border border-gray-200 rounded-lg soft-scrollbar mt-6">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="px-5 py-3 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Shelters
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Some description</p>
            </caption>
            <thead class="text-xs font-normal text-gray-500 uppercase bg-stone-100">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Shelter Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Case Title
                </th>
                <th scope="col" class="py-3 px-6">
                    Contract Number
                </th>
                <th scope="col" class="py-3 px-6">
                    Shelter Location
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody class="divide-y">
                <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <h4 class="text-sm font-medium text-gray-700">Mumbai Shelter Camp</h4>
                        <span class="text-xs font-regular text-gray-500">TU3F...0077</span>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <h4 class="text-sm font-medium text-gray-700">Mumbai Fire</h4>
                        <span class="text-xs font-regular text-gray-500">CU3F...1277</span>
                    </div>
                </td>
                <td class="py-4 px-6">
                    +91 9082905016
                </td>
                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <h4 class="text-sm font-medium text-gray-700">Thane, Assam</h4>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View
                                                                                                         on map</a>
                    </div>
                </td>

                <td class="py-4 px-6 text-right flex items-center justify-end gap-3">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <h4 class="text-sm font-medium text-gray-700">Mumbai Shelter Camp</h4>
                        <span class="text-xs font-regular text-gray-500">TU3F...0077</span>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <h4 class="text-sm font-medium text-gray-700">Mumbai Fire</h4>
                        <span class="text-xs font-regular text-gray-500">CU3F...1277</span>
                    </div>
                </td>
                <td class="py-4 px-6">
                    +91 9082905016
                </td>
                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <h4 class="text-sm font-medium text-gray-700">Thane, Assam</h4>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View
                                                                                                         on map</a>
                    </div>
                </td>

                <td class="py-4 px-6 text-right flex items-center justify-end gap-3">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <h4 class="text-sm font-medium text-gray-700">Mumbai Shelter Camp</h4>
                        <span class="text-xs font-regular text-gray-500">TU3F...0077</span>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <h4 class="text-sm font-medium text-gray-700">Mumbai Fire</h4>
                        <span class="text-xs font-regular text-gray-500">CU3F...1277</span>
                    </div>
                </td>
                <td class="py-4 px-6">
                    +91 9082905016
                </td>
                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <h4 class="text-sm font-medium text-gray-700">Thane, Assam</h4>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View
                                                                                                         on map</a>
                    </div>
                </td>

                <td class="py-4 px-6 text-right flex items-center justify-end gap-3">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <h4 class="text-sm font-medium text-gray-700">Mumbai Shelter Camp</h4>
                        <span class="text-xs font-regular text-gray-500">TU3F...0077</span>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <h4 class="text-sm font-medium text-gray-700">Mumbai Fire</h4>
                        <span class="text-xs font-regular text-gray-500">CU3F...1277</span>
                    </div>
                </td>
                <td class="py-4 px-6">
                    +91 9082905016
                </td>
                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <h4 class="text-sm font-medium text-gray-700">Thane, Assam</h4>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View
                                                                                                         on map</a>
                    </div>
                </td>

                    <td class="py-4 px-6 text-right flex items-center justify-end gap-3">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
