<?php

namespace App\Http\Livewire\Modals;

use Illuminate\Support\Facades\Http;
use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditUserDetailsModal extends ModalComponent
{
    public $actionType = 'add';

    public $firstName;
    public $lastName;
    public $email;
    public $mobile;
    public $password;
    public $organization;

    public $user;

    protected $rules = [
        'firstName' => 'required',
        'email' => 'required|email|unique:users',
        'mobile' => 'required',
        'password' => 'required',
        'organization' => 'required',
    ];

    public function saveUser()
    {
        $this->validate([
            'firstName' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'password' => 'required',
            'organization' => 'required',
        ]);

        $attributes = [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'mobile' => $this->mobile,
        ];

        if ($this->password) {
            $attributes['password'] = bcrypt($this->password);
        }

        $this->user->update($attributes);

        $this->emit('userTableRefresh');
        $this->emit('closeModal');
    }

    public function addUser()
    {
        $this->validate();

        $attributes = [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'mobile' => $this->mobile,
        ];

        $signature = sha1(serialize($attributes));
        $attributes['signature'] = $signature;

        if ($this->password) {
            $attributes['password'] = \Hash::make($this->password);
        }
        //Function to create User
        $apiURL = config('app.node') . '/user/create';
        $postInput = [
            'userKey' => $signature,
        ];
        $token = config('app.server_token');
        $response = Http::withToken($token)->post($apiURL, $postInput);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        if ($responseBody['data']) {
            $attributes['user_token'] = $responseBody['data']['userToken'];
        }


        $user = User::create($attributes);


        $this->emit('userTableRefresh');
        $this->firstName = '';
        $this->lastName = '';
        $this->email = '';
        $this->mobile = '';
        $this->password = '';
        $this->organization = '';

        $this->closeModal();
    }

    public function mount(string $actionType, User $user)
    {
        $this->actionType = $actionType ?? 'add';
        $this->user = $user;

        if ($this->actionType === 'edit') {
            $this->firstName = $this->user->first_name;
            $this->lastName = $this->user->last_name;
            $this->email = $this->user->email;
            $this->mobile = $this->user->mobile;
            $this->password = $this->user->password;
        }
    }

    public function render()
    {
        return view('livewire.modals.edit-user-details-modal');
    }
}
