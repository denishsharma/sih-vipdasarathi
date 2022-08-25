<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;
use App\Models\DisasterType;
use LivewireUI\Modal\ModalComponent;

class EditDisasterTypeModal extends ModalComponent
{
    public $actionType = 'add';

    public $type;

    public $disasterType;

    protected $rules = [
        'type' => 'required',
    ];

    public function saveDisasterType() {
        $this->validate();

        $attributes = [
            'name' => $this->type,
        ];

        $this->disasterType->update($attributes);

        $this->emit('disasterTypeTableRefresh');
        $this->emit('closeModal');
    }

    public function addDisasterType() {
        $this->validate();

        $attributes = [
            'name' => $this->type,
        ];

        $signature = sha1(serialize($attributes));
        $attributes['signature'] = $signature;

        $disasterType = DisasterType::create($attributes);

        $this->emit('disasterTypeTableRefresh');

        $this->type = '';

        $this->closeModal();
    }

    public function mount(string $actionType, DisasterType $disasterType) {
        $this->actionType = $actionType ?? 'add';
        $this->disasterType = $disasterType;

        if ($this->actionType == 'edit') {
            $this->type = $disasterType->name;
        }
    }

    public function render()
    {
        return view('livewire.modals.edit-disaster-type-modal');
    }
}
