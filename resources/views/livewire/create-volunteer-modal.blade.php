<x-modal.card title="Create Volunteer Details" wire:model.defer="createVolunteerDetails">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 soft-scrollbar">
        <x-input label="First Name" placeholder="Enter first name" wire:model.defer="name" />
        <x-input label="Last Name" placeholder="Enter last name" wire:model.defer="name" />

        <x-input label="Mobile Number" placeholder="Enter mobile number" wire:model.defer="name" />
        <x-input label="Aadhar Card No" placeholder="Enter aadhar card number" wire:model.defer="name" />

        <div class="col-span-1 sm:col-span-2 mt-2">
            <h4 class="block text-md font-semibold text-gray-700 mb-2.2">Authentication Details</h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <x-input label="Email" placeholder="Enter email address" wire:model.defer="name" />
                <x-input label="Password" type="password" placeholder="Enter password" wire:model.defer="name" />
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
