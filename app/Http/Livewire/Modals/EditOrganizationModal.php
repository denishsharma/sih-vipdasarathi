<?php

namespace App\Http\Livewire\Modals;


use Livewire\Component;
use App\Models\Organization;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Cookie;

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
        $userToken=\Cookie::get('user_token');
      
        $attributes = [
            'name' => $this->name,
            'level' => $this->level,
            'description' => $this->description,
        ];

        $signature = sha1(serialize($attributes));
        $attributes['signature'] = $signature;
        $organization = Organization::create($attributes);

        $apiURL = config('app.node') .'organization/create';

        $userToken = $userToken;
        $postInput = [
            'name' => $this->name,
            'description' => $this->description,
            'userToken' => $userToken,
            'signature' => $signature,

        ];
        dd($postInput);
        $token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzZXJ2ZXJJZCI6IjNiMTI3YjZmLTI0ZDMtNDQyNC04NmVlLTQwODUzMTcxYjY0YiIsImFwaUtleSI6IjZiMGI5OWZiLTI0ZTQtNGQyZS05ZjM0LTYyZjE5MzQzMGRhZSIsImlhdCI6MTY1ODEwNDQ3N30.Nhsk-kB1tMbGyb_JlWDPlmAgGXDxglUGQThRgVpep5c";        $response = Http::withToken($token)->post($apiURL, $postInput);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);


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
