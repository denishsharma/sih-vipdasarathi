<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <caption
        class="px-5 py-3 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        Disaster Types
        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Some description</p>
    </caption>
    <thead class="text-xs font-normal text-gray-500 uppercase bg-stone-100">
    <tr>
        <th scope="col" class="py-3 px-6">
            Type
        </th>
        <th scope="col" class="py-3 px-6">
            Number of Cases
        </th>
        <th scope="col" class="py-3 px-6">
            Number of SOPs
        </th>
        <th scope="col" class="py-3 px-6">
            Actions
        </th>
    </tr>
    </thead>
    <tbody class="divide-y">
    @foreach($disasterTypes as $disasterType)
        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class="py-4 px-6">
                {{ $disasterType->name }}
            </td>
            <td class="py-4 px-6">
                13
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">(View)</a>
            </td>
            <td class="py-4 px-6">
                2
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">(View)</a>
            </td>
            <td class="py-4 px-6 text-right flex items-center justify-start gap-3">
                <a wire:click="openEditModal({{ $disasterType }})" class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
