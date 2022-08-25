 <x-modal.card title="Edit Task Details" wire:model.defer="createTeam">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 soft-scrollbar">
            <div class="col-span-2 sm:col-span-1">
                <x-input label="Team Name" placeholder="Enter the Name of the Team" wire:model.defer="name" />
            </div>

            <x-select
                label="Team Type"
                placeholder="Select team task type"
                :async-data="route('api.tasks.types')"
                option-label="name"
                option-value="id"
                hide-empty-message
            >
                <x-slot name="afterOptions" class="p-2 flex justify-center" x-show="displayOptions.length === 0">
                    <x-button
                        x-on:click="close"
                        primary
                        flat
                        full>
                        <span x-html="`Create type <b>${search}</b>`"></span>
                    </x-button>
                </x-slot>
            </x-select>

            <div class="col-span-1 sm:col-span-2">
                <x-textarea label="Description" placeholder="Describe your team in detail..." wire:model.defer="description" />
            </div>

            <div class="col-span-1 sm:col-span-2 mt-2">
                <h4 class="block text-md font-semibold text-gray-700 mb-2.2">Assign Tasks</h4>
                <div class="flex justify-between gap-4 mb-2.5">
                    <x-select
                        placeholder="Select teams to assign"
                        :async-data="route('api.tasks.types')"
                        option-label="name"
                        option-value="id"
                        hide-empty-message
                        multiselect
                        class="flex-auto"
                    />
                    <x-button default spinner label="Assign Task" class="flex-none"/>
                </div>
                <div class="">
                    <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                            <div class="w-0 flex-1 flex items-center">
                                <x-icon name="user-group" class="w-5 h-5 flex-shrink-0 text-gray-400" />
                                <span class="ml-2 flex-1 w-0 truncate">Task 2</span>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <a href="#" class="font-medium text-red-600 hover:text-red-300-500">Remove</a>
                            </div>
                        </li>
                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                            <div class="w-0 flex-1 flex items-center">
                                <x-icon name="user-group" class="w-5 h-5 flex-shrink-0 text-gray-400" />
                                <span class="ml-2 flex-1 w-0 truncate">Task 1 </span>
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
                    <x-button positive label="Save Details" wire:click="save" />
                </div>
            </div>
        </x-slot>
    </x-modal.card>

