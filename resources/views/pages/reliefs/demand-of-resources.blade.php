@extends('layouts.relief', ['relief' => 'demand-of-resource'])

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
                    <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-400">Demand Of
                        Resources</span>
                </div>
            </li>
        </ol>
    </nav>
@endsection

@section('navbar-attached-actions')
    Demand of resources actions
@endsection

@section('setting-content')
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="px-5 py-3 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            Manage demand of resources
            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Some description</p>
        </caption>
        <thead class="text-xs font-normal text-gray-500 uppercase bg-stone-100">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Resource Type
                </th>
                <th scope="col" class="py-3 px-6">
                    Request Subject
                </th>
                <th scope="col" class="py-3 px-6">
                    Comment
                </th>
                <th scope="col" class="py-3 px-6">
                    Item
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    DateTime
                </th>

            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <h4 class="text-sm font-medium text-gray-700">Gurujat</h4>
                        <span class="text-xs font-regular text-gray-500">weqweqeqweqe</span>
                    </div>
                </td> --}}
                <td class="py-4 px-6">
                    Food
                </td>
                <td class="py-4 px-6">
                    Sliver
                </td>
                <td class="flex flex-col gap-y-1 py-4 px-6">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Default</span>
                    <a href="" class="text-xs font-semibold">Check Sop</a>
                </td>
                <td class="py-4 px-6">
                    $2999
                </td>
                <td class="py-4 px-6 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Microsoft Surface Pro
                </th>
                <td class="py-4 px-6">
                    White
                    Need more food
                </td>
                <td class="py-4 px-6">
                    Lorem ipsum dolor sit amet
                </td>
                <td class="py-4 px-6">
                    Apples
                </td>
                <td class="py-4 px-6">
                    $1999
                </td>
                <td class="py-4 px-6 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                <td class="py-4 px-6">
                    <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                        <span class="text-xs font-regular text-gray-500">23 October</span>
                        <span class="text-xs font-regular text-gray-500">23:50</span>
                    </div>
                </td>

            </tr>
            </tbody>
        </table>
    </div>
@endsection
