<x-modal.card title="Add Organization" wire:model.defer="editOrganization">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 soft-scrollbar">
        <x-input label="Name" placeholder="Enter organization name" wire:model.defer="name" />
        <x-select
            label="Level"
            placeholder="Select level of organization"
            :options="['National', 'State', 'District', 'Planning (Other)']"
            wire:model.defer="level"
        />

        <div class="col-span-1 sm:col-span-2">
            <x-textarea label="Description" placeholder="Write something about your organization..." wire:model.defer="description" />
        </div>

        <div class="col-span-1 sm:col-span-2">
            <h4 class="block text-md font-semibold text-gray-700 mb-2.2">Default Permissions</h4>
            <div class="columns-3 gap-4">
                <div class="break-inside-avoid mb-3 block">
                    <h3 class="block text-sm font-semibold text-gray-600 mb-1">Organization</h3>
                    <div class="grid grid-cols-1 gap-1">
                        <x-checkbox id="1" label="Create" wire:model.defer="permissions.create" />
                        <x-checkbox id="2" label="View" wire:model.defer="permissions.read" />
                        <x-checkbox id="3" label="Update" wire:model.defer="permissions.update" />
                        <x-checkbox id="4" label="Delete" wire:model.defer="permissions.delete" />
                    </div>
                </div>
                <div class="break-inside-avoid mb-3 block">
                    <h3 class="block text-sm font-semibold text-gray-600 mb-1">Users</h3>
                    <div class="grid grid-cols-1 gap-1">
                        <x-checkbox id="5" label="Create" wire:model.defer="permissions.users.create" />
                        <x-checkbox id="6" label="View" wire:model.defer="permissions.users.read" />
                        <x-checkbox id="7" label="Update" wire:model.defer="permissions.users.update" />
                        <x-checkbox id="8" label="Delete" wire:model.defer="permissions.users.delete" />
                        <x-checkbox id="8-1" label="Assign Organization" wire:model.defer="permissions.users.assignOrganization" />
                        <x-checkbox id="8-2" label="Assign Role" wire:model.defer="permissions.users.assignOrganization" />
                        <x-checkbox id="8-3" label="Assign Permissions" wire:model.defer="permissions.users.assignOrganization" />
                    </div>
                </div>
                <div class="break-inside-avoid mb-3 block">
                    <h3 class="block text-sm font-semibold text-gray-600 mb-1">Roles</h3>
                    <div class="grid grid-cols-1 gap-1">
                        <x-checkbox id="9" label="Create" wire:model.defer="permissions.roles.create" />
                        <x-checkbox id="10" label="View" wire:model.defer="permissions.roles.read" />
                        <x-checkbox id="11" label="Update" wire:model.defer="permissions.roles.update" />
                        <x-checkbox id="12" label="Delete" wire:model.defer="permissions.roles.delete" />
                    </div>
                </div>
                <div class="break-inside-avoid mb-3 block">
                    <h3 class="block text-sm font-semibold text-gray-600 mb-1">Permissions</h3>
                    <div class="grid grid-cols-1 gap-1">
                        <x-checkbox id="13" label="Create" wire:model.defer="permissions.permissions.create" />
                        <x-checkbox id="14" label="View" wire:model.defer="permissions.permissions.read" />
                        <x-checkbox id="15" label="Update" wire:model.defer="permissions.permissions.update" />
                        <x-checkbox id="16" label="Delete" wire:model.defer="permissions.permissions.delete" />
                    </div>
                </div>
                <div class="break-inside-avoid mb-3 block">
                    <h3 class="block text-sm font-semibold text-gray-600 mb-1">Permissions</h3>
                    <div class="grid grid-cols-1 gap-1">
                        <x-checkbox id="13" label="Create" wire:model.defer="permissions.permissions.create" />
                        <x-checkbox id="14" label="View" wire:model.defer="permissions.permissions.read" />
                        <x-checkbox id="15" label="Update" wire:model.defer="permissions.permissions.update" />
                        <x-checkbox id="16" label="Delete" wire:model.defer="permissions.permissions.delete" />
                    </div>
                </div>
                <div class="break-inside-avoid mb-3 block">
                    <h3 class="block text-sm font-semibold text-gray-600 mb-1">Permissions</h3>
                    <div class="grid grid-cols-1 gap-1">
                        <x-checkbox id="13" label="Create" wire:model.defer="permissions.permissions.create" />
                        <x-checkbox id="14" label="View" wire:model.defer="permissions.permissions.read" />
                        <x-checkbox id="15" label="Update" wire:model.defer="permissions.permissions.update" />
                        <x-checkbox id="16" label="Delete" wire:model.defer="permissions.permissions.delete" />
                    </div>
                </div>
                <div class="break-inside-avoid mb-3 block">
                    <h3 class="block text-sm font-semibold text-gray-600 mb-1">Permissions</h3>
                    <div class="grid grid-cols-1 gap-1">
                        <x-checkbox id="13" label="Create" wire:model.defer="permissions.permissions.create" />
                        <x-checkbox id="14" label="View" wire:model.defer="permissions.permissions.read" />
                        <x-checkbox id="15" label="Update" wire:model.defer="permissions.permissions.update" />
                        <x-checkbox id="16" label="Delete" wire:model.defer="permissions.permissions.delete" />
                    </div>
                </div>
                <div class="break-inside-avoid mb-3 block">
                    <h3 class="block text-sm font-semibold text-gray-600 mb-1">Permissions</h3>
                    <div class="grid grid-cols-1 gap-1">
                        <x-checkbox id="13" label="Create" wire:model.defer="permissions.permissions.create" />
                        <x-checkbox id="14" label="View" wire:model.defer="permissions.permissions.read" />
                        <x-checkbox id="15" label="Update" wire:model.defer="permissions.permissions.update" />
                        <x-checkbox id="16" label="Delete" wire:model.defer="permissions.permissions.delete" />
                    </div>
                </div>
                <div class="break-inside-avoid mb-3 block">
                    <h3 class="block text-sm font-semibold text-gray-600 mb-1">Permissions</h3>
                    <div class="grid grid-cols-1 gap-1">
                        <x-checkbox id="13" label="Create" wire:model.defer="permissions.permissions.create" />
                        <x-checkbox id="14" label="View" wire:model.defer="permissions.permissions.read" />
                        <x-checkbox id="15" label="Update" wire:model.defer="permissions.permissions.update" />
                        <x-checkbox id="16" label="Delete" wire:model.defer="permissions.permissions.delete" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-4">

            <div class="flex justify-between gap-x-2">
                <x-button white label="Cancel" x-on:click="close" />
                <x-button positive label="Add Organization" wire:click="save" />
            </div>
        </div>
    </x-slot>
</x-modal.card>
