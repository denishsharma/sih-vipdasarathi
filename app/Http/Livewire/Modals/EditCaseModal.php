<?php

namespace App\Http\Livewire\Modals;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\DisasterCase;
use App\Models\CaseMetaData;
use LivewireUI\Modal\ModalComponent;

class EditCaseModal extends ModalComponent
{
    public $actionType = 'add';

    public $title;
    public $description;
    public $addressLine;
    public $zipcode;
    public $city ;
    public $district;
    public $state;
    public $disasterType;
    public $selectedSop;
    public $priority;
    public $happenedAt;

    public DisasterCase $case;

    protected $rules = [
        'title' => 'required',
        'addressLine' => 'required',
        'zipcode' => 'required',
        'city' => 'required',
        'district' => 'required',
        'state' => 'required',
        'disasterType' => 'required',
        'selectedSop' => 'required',
        'priority' => 'required',
        'happenedAt' => 'required',
    ];

    public function saveCaseDetails() {
        $this->validate();

        CaseMetaData::whereId($this->case->id)->update([
            'sop_id' => $this->selectedSop,
        ]);

        $this->case->update([
            'title' => $this->title,
            'description' => $this->description,
            'address_line' => $this->addressLine,
            'zipcode' => $this->zipcode,
            'city' => $this->city,
            'district' => $this->district,
            'state_id' => $this->state,
            'disaster_type_id' => $this->disasterType,
            'priority' => $this->priority,
            'happened_at' => $this->happenedAt,
        ]);

        $this->emit('caseTableRefresh');
        $this->emit('closeModal');
    }

    public function addCase() {
        $this->validate();

        $caseMetadataAttributes = [
            'sop_id' => $this->selectedSop,
        ];
        $caseMetaDataSignature = sha1(serialize($caseMetadataAttributes));
        $caseMetadataAttributes['signature'] = $caseMetaDataSignature;

        $caseMetadata = CaseMetaData::create($caseMetadataAttributes);

        $attributes = [
            'title' => $this->title,
            'description' => $this->description,
            'address_line' => $this->addressLine,
            'zipcode' => $this->zipcode,
            'city' => $this->city,
            'district' => $this->district,
            'state_id' => $this->state,
            'disaster_type_id' => $this->disasterType,
            'case_meta_data_id' => $caseMetadata->id,
            'priority' => $this->priority,
            'happened_at' => Carbon::parse($this->happenedAt) ,
        ];

        $signature = sha1(serialize($attributes));
        $attributes['signature'] = $signature;

        $case = DisasterCase::create($attributes);

        $this->emit('caseTableRefresh');

        $this->title = '';
        $this->description = '';
        $this->addressLine = '';
        $this->zipcode = '';
        $this->city = '';
        $this->district = '';
        $this->state = '';
        $this->disasterType = '';
        $this->selectedSop = '';
        $this->priority = '';
        $this->happenedAt = '';

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.modals.edit-case-modal');
    }
}
