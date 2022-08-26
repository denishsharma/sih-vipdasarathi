<?php

namespace App\Http\Livewire\Modals;

use App\Models\User;
use Livewire\Component;
use App\Models\VolunteerProfile;
use LivewireUI\Modal\ModalComponent;

class EditVolunteerDetailsModal extends ModalComponent {
    public $actionType = 'add';

    public $firstName;
    public $lastName;
    public $email;
    public $mobile;
    public $aadhar;
    public $password;

    public $volunteerProfile;

    protected $rules = [
        'firstName' => 'required',
        'email' => 'required|email|unique:users',
        'mobile' => 'required',
        'password' => 'required',
        'aadhar' => 'required',
    ];

    public function saveVolunteerProfile() {
        $this->validate([
            'firstName' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'password' => 'required',
            'aaadhar' => 'required',
        ]);

        $userAttributes = [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'mobile' => $this->mobile,
        ];

        $profileAttributes = [
            'aadhar_card' => $this->aadhar,
        ];

        if ($this->password) {
            $userAttributes['password'] = bcrypt($this->password);
        }

        $this->volunteerProfile->user->update($userAttributes);

        $this->volunteerProfile->update($profileAttributes);

        $this->emit('volunteerProfileTableRefresh');
        $this->emit('closeModal');
    }

    public function addVolunteerProfile() {
        $this->validate();

        $userAttributes = [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'password' => \Hash::make($this->password),
        ];

        $userSignature = sha1(serialize($userAttributes));
        $userAttributes['signature'] = $userSignature;

        // assign user_token logic here

        $user = User::create($userAttributes);

        $profileAttributes = [
            'user_id' => $user->id,
            'aadhar_card' => $this->aadhar,
        ];

        $profileSignature = sha1(serialize($profileAttributes));
        $profileAttributes['signature'] = $profileSignature;

        $volunteerProfile = VolunteerProfile::create($profileAttributes);

        $this->emit('volunteerProfileTableRefresh');

        $this->firstName = '';
        $this->lastName = '';
        $this->email = '';
        $this->mobile = '';
        $this->password = '';
        $this->aadhar = '';

        $this->emit('closeModal');
    }

    public function render() {
        return view('livewire.modals.edit-volunteer-details-modal');
    }
}
