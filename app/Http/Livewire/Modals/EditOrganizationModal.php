<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;
use App\Models\Organization;
use LivewireUI\Modal\ModalComponent;

class EditOrganizationModal extends ModalComponent {
    public $actionType = 'add';

    public $name;
    public $level;
    public $description;

    public $organization;

    protected $rules = [
        'name' => 'required',
        'level' => 'required',
    ];

    public function saveOrganization() {
        $this->validate();

        $this->organization->update([
            'name' => $this->name,
            'level' => $this->level,
            'description' => $this->description,
        ]);

        $this->emit('organizationTableRefresh');
        $this->emit('closeModal');
    }

    public function addOrganization() {
        $this->validate();

        $attributes = [
            'name' => $this->name,
            'level' => $this->level,
            'description' => $this->description,
        ];

        $signature = sha1(serialize($attributes));
        $attributes['signature'] = $signature;

        $organization = Organization::create($attributes);

        $this->emit('organizationTableRefresh');

        $this->name = '';
        $this->level = '';
        $this->description = '';

        $this->closeModal();
    }

    public function mount(string $actionType, Organization $organization) {
        $this->actionType = $actionType ?? 'add';
        $this->organization = $organization;

        if ($this->actionType === 'edit') {
            $this->name = $this->organization->name;
            $this->level = $this->organization->level;
            $this->description = $this->organization->description;
        }
    }

    public function render() {
        return view('livewire.modals.edit-organization-modal');
    }
}
