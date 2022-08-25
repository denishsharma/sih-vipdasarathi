@extends('pages.team.master', ['activeSection' => 'tasks'])

@section('breadcrumb')
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
                       class="ml-1 text-sm font-medium text-gray-400 hover:text-gray-700 md:ml-2 dark:text-gray-400 dark:hover:text-white">Teams</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <x-icon name="chevron-right" class="w-3 h-3 text-gray-400" />
                    <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-400">Tasks</span>
                </div>
            </li>
        </ol>
    </nav>
@endsection

@section('main-content')
    <div class="overflow-x-auto border border-gray-200 rounded-lg soft-scrollbar">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption
                class="px-5 py-3 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Tasks
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Some description</p>
            </caption>
            <thead class="text-xs font-normal text-gray-500 uppercase bg-stone-100">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Task name
                </th>
                <th scope="col" class="py-3 px-6">
                    Subject
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
                <th scope="col" class="py-3 px-6">
                    Task Type
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                    <h4 class="text-sm font-medium text-gray-700">xyz</h4>
                </td>
                <td class="py-4 px-6">
                    flood
                </td>
                <td class="py-4 px-6">
                    this task is almost done.
                </td>
                <td class="py-4 px-6">
                    High
                </td>
                <td class="py-4 px-6 text-right flex items-center justify-start gap-3">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                </td>
                <td class="py-4 px-6">
                    ccc
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
