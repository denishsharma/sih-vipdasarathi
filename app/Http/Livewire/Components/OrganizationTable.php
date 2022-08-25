<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use WireUi\Traits\Actions;
use App\Models\Organization;

class OrganizationTable extends Component {
    use Actions;

    public $organizations = [];

    protected $listeners = [
        'organizationTableRefresh' => 'refreshList',
    ];

    public function openEditModal($organization) {
        $this->emit('openModal', 'modals.edit-organization-modal', [
            'actionType' => 'edit',
            'organization' => $organization,
        ]);
    }

    public function refreshList() {
        $this->organizations = Organization::orderByDesc('created_at')->get();
    }

    public function mount() {
        $this->refreshList();
    }

    public function openDeleteModal() {
        $this->dialog()->confirm([
            'title' => 'Are you Sure?',
            'description' => 'Delete the organization?',
            'icon' => 'question',
            'accept' => [
                'label' => 'Yes, delete it',
                'method' => 'save',
                'params' => 'Saved',
            ],
            'reject' => [
                'label' => 'No, cancel',
                'method' => 'cancel',
            ],
        ]);
    }

    public function render() {
        return view('livewire.components.organization-table');
    }
}
