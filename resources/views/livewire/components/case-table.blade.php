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
            Case Title
        </th>
        <th scope="col" class="py-3 px-6">
            Priority
        </th>
        <th scope="col" class="py-3 px-6">
            Location
        </th>
        <th scope="col" class="py-3 px-6">
            Type of Disaster
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
    <tbody class="divide-y">
    @foreach($cases as $case)
        <tr
            class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                    <h4 class="text-sm font-medium text-gray-700">{{ $case->title }}</h4>
                    <span class="text-xs font-regular text-gray-500">{{ Str::limit($case->signature, 12) }}</span>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-800">{{ $case->priority }}</span>
            </td>
            <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                    <h4 class="text-sm font-medium text-gray-700">{{ $case->district }}
                        , {{ ucwords($case->state->name) }}</h4>
                    <a href="#" class="font-medium text-xs text-blue-600 dark:text-blue-500 hover:underline">View on map</a>
                </div>
            </td>
            <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                    <h4 class="text-sm font-medium text-gray-700">{{ $case->disaster_type->name }}</h4>
                    <a href="#" class="font-medium text-xs text-blue-600 dark:text-blue-500 hover:underline">View SOP</a>
                </div>
            </td>
            <td class="py-4 px-6">
                <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                    <h4 class="text-sm font-medium text-gray-700">{{ \Carbon\Carbon::parse($case->happened_at)->format('d M, Y') }}</h4>
                    <span class="text-xs font-regular text-gray-500">{{ \Carbon\Carbon::parse($case->happened_at)->format('h:m A') }}</span>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-orange-100 text-orange-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-800">{{ $case->status }}</span>
            </td>
            <td class="py-4 px-6">
                <div class="text-right flex items-center justify-end gap-3">
                    <a wire:click="openEditModal({{ $case }})" class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="{{ route('case.view.overview', ['signature' => $case->signature]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
