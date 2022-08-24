<x-modal.card title="Create new Ticket" wire:model.defer="createTicket">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 soft-scrollbar">
        <div class="col-span-1 sm:col-span-2">
            <x-select label="Task Name" Placeholder="Selected Task" disabled wire:model.defer="level" />
        </div>
        <div class="col-span-1 sm:col-span-2">
            <x-input label="Subject" placeholder="Enter subject in short" wire:model.defer="name" />
        </div>
        <div class="col-span-1 sm:col-span-2">
            <x-textarea label="Description" placeholder="Enter description for the Ticket" wire:model.defer="name" />
        </div>
        <div class="col-span-1 sm:col-span-2">

            <x-select label="Priority" Placeholder="Select Priority" :options="['Low', 'Medium', 'High', 'Urgent']" wire:model.defer="level" />
        </div>

        <div class="col-span-1 sm:col-span-2 mt-2">
            <h4 class="block text-md font-semibold text-gray-700 mb-2.2">Attachments</h4>
            <div class="grid grid-cols-1 mb-2.5">
                <x-input placeholder="Select files to upload">
                    <x-slot name="append">
                        <div class="absolute inset-y-0 right-0 flex items-center p-0.5">
                            <x-button flat squared icon="upload" label="Upload" class="h-full rounded-r-md"/>
                        </div>
                    </x-slot>
                </x-input>

            </div>
            <div class="">
                <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                        <div class="w-0 flex-1 flex items-center">
                            <x-icon name="paper-clip" class="w-5 h-5 flex-shrink-0 text-gray-400" />
                            <span class="ml-2 flex-1 w-0 truncate">some-attachments.pdf</span>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                            <a href="#" class="font-medium text-red-600 hover:text-red-300-500">Remove</a>
                        </div>
                    </li>
                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                        <div class="w-0 flex-1 flex items-center">
                            <x-icon name="paper-clip" class="w-5 h-5 flex-shrink-0 text-gray-400" />
                            <span class="ml-2 flex-1 w-0 truncate">file.pdf</span>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                            <a href="#" class="font-medium text-red-600 hover:text-red-300-500">Remove</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-4">

            <div class="flex justify-between gap-x-2">
                <x-button white label="Cancel" x-on:click="close" />
                <x-button positive label="Create Ticket" wire:click="save" />
            </div>
        </div>
    </x-slot>
</x-modal.card>

