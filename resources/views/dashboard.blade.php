@extends('layouts.general', ['activeButton' => 'home'])

@section('navbar-attached')
    <nav class="">
        <div class="mx-auto px-2 sm:px-6 lg:px-20">
            <div class="relative flex items-center justify-between h-16 gap-10">
                <h4 class="font-medium text-gray-700">Dashboard</h4>
                <div class="">
                    <div class="container">
                        <x-button label="Default" @click="$openModal('editOrganization')"></x-button>
                        <x-button label="Edit User" @click="$openModal('editUserDetails')"></x-button>
                        <x-button label="Edit Task" @click="$openModal('editTaskDetails')"></x-button>
                        <x-button label="Create Team" @click="$openModal('createTeam')"></x-button>
                        <x-button label="Create Resource Demand" @click="$openModal('createDemandOfResources')"></x-button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-gray-100 h-px"></div>
@endsection

@section('content')
    <div class="mx-auto px-20 py-10">
        <div class="mx-auto grid overflow-hidden grid-cols-4 grid-rows-1 gap-10 lg:w-10/12 sm:w-auto">
            <div class="row-end-auto col-start-1 grid grid-cols-1 gap-5">
                <div class="border border-gray-200 p-4 rounded-md h-fit">
                    <x-button label="Hello" />
                </div>
            </div>
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
                        </caption>
                        <thead class="text-xs font-normal text-gray-500 uppercase bg-stone-100">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Case Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Pincode
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Type of Disaster
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Date and Time
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit</span>
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
                            </td>
                            <td class="py-4 px-6">
                                Laptop PC
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
                            <td class="py-4 px-6 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
