<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <caption
        class="px-5 py-3 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        Users
        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Some description</p>
    </caption>
    <thead class="text-xs font-normal text-gray-500 uppercase bg-stone-100">
    <tr>
        <th scope="col" class="py-3 px-6">
            Name
        </th>
        <th scope="col" class="py-3 px-6">
            Contact
        </th>
        <th scope="col" class="py-3 px-6">
            Permissions
        </th>
        <th scope="col" class="py-3 px-6">
            Organization
        </th>
        <th scope="col" class="py-3 px-6">
            Actions
        </th>
    </tr>
    </thead>
    <tbody class="divide-y">
    @foreach($users as $user)
        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                    <h4 class="text-sm font-medium text-gray-700">{{ join(" ", [$user->first_name, $user->last_name ?? '']) }}</h4>
                    <span class="text-xs font-regular text-gray-500">{{ $user->signature }}</span>
                </div>
            </td>

            <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                    <h4 class="text-sm font-medium text-gray-700">{{ $user->mobile }}</h4>
                    <span class="text-xs font-regular text-gray-500">{{ $user->email }}</span>
                </div>
            </td>

            <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                    <h4 class="text-sm font-medium text-gray-700">26</h4>
                    <span class="text-xs font-regular text-gray-500"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a></span>
                </div>
            </td>

            <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                    <h4 class="text-sm font-medium text-gray-700">NDRF</h4>
                    <span class="text-xs font-regular text-gray-500"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a></span>
                </div>
            </td>


            <td class="py-4 px-6 text-right flex items-center justify-start gap-3">
                <a wire:click="openEditModal({{ $user }})" class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
