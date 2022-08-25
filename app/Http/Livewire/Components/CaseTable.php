<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use WireUi\Traits\Actions;
use App\Models\DisasterCase;

class CaseTable extends Component
{
    use Actions;

    public $cases = [];
    public $activeSection = 'all';

    protected $listeners = [
        'caseTableRefresh' => 'refreshList',
    ];

    public function openEditModal($case) {
        $this->emit('openModal', 'modals.edit-case-modal', [
            'actionType' => 'edit',
            'case' => $case,
        ]);
    }

    public function refreshList($status=null) {
        if ($status == null) {
            $this->cases = DisasterCase::orderByDesc('created_at')->get();
        } else {
            $this->cases = DisasterCase::where('status', $status)->orderByDesc('created_at')->get();
        }
    }

    public function mount($cases=null) {
        if ($cases) {
            $this->cases = $cases;
        } else {
            $this->refreshList();
        }
    }

    public function render()
    {
        return view('livewire.components.case-table');
    }
}
