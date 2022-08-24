<x-modal.card title="Create new Case" wire:model.defer="createCase">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 soft-scrollbar">
        <div class="col-span-1 sm:col-span-2">
            <x-select label="Task Name" Placeholder="Selected Task" :options="['Maharashtra', 'Uttar Pradesh', 'Madhya Pradesh', 'Punjab', 'Rajasthan', 'Tamilnadu']" disabled wire:model.defer="level" />
        </div>
        <div class="col-span-1 sm:col-span-2">
            <x-textarea label="Description" placeholder="Enter description for the case" wire:model.defer="name" />
        </div>

        <div class="col-span-1 sm:col-span-2 mt-2">
            <h4 class="block text-md font-semibold text-gray-700 mb-2.2">Locations</h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <x-input label="Longitude" placeholder="Enter Longitude" wire:model.defer="name" />
                <x-input label="Latitude" placeholder="Enter Latitude" wire:model.defer="name" />
                <x-button class="col-span-1 sm:col-span-2" default label="Get Address" wire:click="save" />
                <div class="col-span-1 sm:col-span-2">
                    <x-input label="Address" placeholder="Enter Address" wire:model.defer="name" />
                </div>
                <x-input label="Pincode" placeholder="Enter Pincode" wire:model.defer="name" />
                <x-input label="City" placeholder="Enter City" wire:model.defer="name" />
                <x-input label="District" placeholder="Enter District" wire:model.defer="name" />
                <x-select label="State" Placeholder="Select State" :options="['Maharashtra', 'Uttar Pradesh', 'Madhya Pradesh', 'Punjab', 'Rajasthan', 'Tamilnadu']" wire:model.defer="level" />

            </div>
        </div>

        <div class="col-span-1 sm:col-span-2 mt-2">
            <h4 class="block text-md font-semibold text-gray-700 mb-2.2">Case Details</h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <x-select label="Type of disaster" placeholder="Select type of disaster" :options="['Earth Quake', 'Volcano', 'Tsunami', 'Flood', 'Landslides', 'Wave Action', 'Sand Storm', 'Cyclone', 'Tornado', 'Drought', 'Melting Glaciers', 'Viral/Bacteria/Parasitic', 'Fungal']" wire:model.defer="level" />

                <x-select label="SOP" Placeholder="Select SOP" :options="['SOP 2022', 'SOP 2021', 'SOP 2020', 'SOP 2019', 'SOP 2018']" wire:model.defer="level" />

                <x-select label="Priority" Placeholder="Select Priority" :options="['Low', 'Medium', 'High', 'Urgent']" wire:model.defer="level" />

                <x-datetime-picker label="Date and Time" placeholder="Select Date and Time" wire:model.defer="level" />

            </div>
        </div>

    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-4">

            <div class="flex justify-between gap-x-2">
                <x-button white label="Cancel" x-on:click="close" />
                <x-button positive label="Create" wire:click="save" />
                <x-button positive label="Create & Active" wire:click="save" />
            </div>
        </div>
    </x-slot>
</x-modal.card>

