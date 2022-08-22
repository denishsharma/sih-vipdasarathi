<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestEditOrganizationModal extends Component {
    public $name;
    public $level;
    public $description;

    public $model;

    public $editOrganization;

    protected $rules = [
        'name' => 'required',
        'level' => 'required',
        'model' => 'required|accepted'
    ];

    public function save() {
        $this->validate();
    }

    public function render() {
        return view('livewire.test-edit-organization-modal');
    }
}
