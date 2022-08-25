<?php

namespace App\Http\Livewire\Components;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public $users = [];

    protected $listeners = [
        'userTableRefresh' => 'refreshList',
    ];

    public function refreshList() {
        $this->users = User::orderByDesc('created_at')->get();
    }

    public function openEditModal($user) {
        $this->emit('openModal', 'modals.edit-user-details-modal', [
            'actionType' => 'edit',
            'user' => $user,
        ]);
    }

    public function mount() {
        $this->refreshList();
    }

    public function render()
    {
        return view('livewire.components.user-table');
    }
}
