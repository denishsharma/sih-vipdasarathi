<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\DisasterType;

class DisasterTypeTable extends Component
{
    public $disasterTypes = [];

    protected $listeners = [
        'disasterTypeTableRefresh' => 'refreshList',
    ];

    public function refreshList() {
        $this->disasterTypes = DisasterType::orderByDesc('created_at')->get();
    }

    public function openEditModal($disasterType) {
        $this->emit('openModal', 'modals.edit-disaster-type-modal', [
            'actionType' => 'edit',
            'disasterType' => $disasterType,
        ]);
    }

    public function mount() {
        $this->refreshList();
    }

    public function render()
    {
        return view('livewire.components.disaster-type-table');
    }
}
