<?php

namespace App\Http\Livewire\Components;

use App\Models\Task;
use Livewire\Component;

class TaskTable extends Component {
    public $tasks = [];

    public $title;
    public $description;

    public $isForCase = null;

    protected $listeners = [
        'taskTableRefresh' => 'refreshList',
    ];

    public function openEditModal($task) {
        $this->emit('openModal', 'modals.edit-task-details-modal', [
            'actionType' => 'edit',
            'task' => $task,
        ]);
    }

    public function refreshList() {
        if ($this->isForCase) {
            $this->tasks = Task::whereDisasterCaseId($this->isForCase)
                ->whereStatus('active')
                ->orderBy('priority')
                ->get();
        } else {
            $this->tasks = Task::orderBy('priority')->get();
        }
    }

    public function render() {
        return view('livewire.components.task-table');
    }
}
