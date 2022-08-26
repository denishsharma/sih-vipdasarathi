<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class VolunteerProfileTable extends Component
{
    public $volunteerProfiles = [];

    protected $listeners = [
        'volunteerProfileTableRefresh' => 'refreshList',
    ];

    public function refreshList() {
        $this->volunteerProfiles = \App\Models\VolunteerProfile::orderByDesc('created_at')->get();
    }

    public function mount() {
        $this->refreshList();
    }

    public function openEditModal($volunteerProfile) {
        $this->emit('openModal', 'modals.edit-volunteer-details-modal', [
            'actionType' => 'edit',
            'volunteerProfile' => $volunteerProfile,
        ]);
    }

    public function render()
    {
        return view('livewire.components.volunteer-profile-table');
    }
}
