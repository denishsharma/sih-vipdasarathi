<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <caption
        class="px-5 py-3 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        {{ $title }}
        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">{{ $description }}</p>
    </caption>
    <thead class="text-xs font-normal text-gray-500 uppercase bg-stone-100">
    <tr>
        <th scope="col" class="py-3 px-6">
            Name
        </th>
        <th scope="col" class="py-3 px-6">
            Team
        </th>
        <th scope="col" class="py-3 px-6">
            Type
        </th>
        <th scope="col" class="py-3 px-6">
            Priority
        </th>
        <th scope="col" class="py-3 px-6">
            Status
        </th>
        <th scope="col" class="py-3 px-6">
            Actions
        </th>
    </tr>
    </thead>
    <tbody class="divide-y">
    @foreach($tasks as $task)
        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                    <h4 class="text-sm font-medium text-gray-700">{{ $task->subject }}</h4>
                    <span class="text-xs font-regular text-gray-500">{{ $task->signature }}</span>
                </div>
            </td>
            <td scope="row" class="py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                <div class="grid grid-rows-2 grid-cols-1 gap-0.4">
                    <h4 class="text-sm font-medium text-gray-700">{{ $task->team->name }}</h4>
                    <span class="text-xs font-regular text-gray-500">{{ $task->team->signature }}</span>
                </div>
            </td>
            <td class="py-4 px-6">{{ $task->task_type->name }}</td>
            <td class="py-4 px-6">
                <span class="bg-orange-100 text-orange-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-800">{{ $task->get_priority() }}</span>
            </td>
            <td class="py-4 px-6">
                <span class="bg-orange-100 text-orange-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-800">{{ $task->status }}</span>
            </td>
            <td class="py-4 px-6 text-right flex items-center justify-start gap-3">
                <a wire:click="openEditModal({{ $task }})" class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                <a href="#" class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
