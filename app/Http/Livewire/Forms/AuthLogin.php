<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use WireUi\Traits\Actions;
use Illuminate\Support\Facades\Http;

class AuthLogin extends Component
{
    use Actions;

    public $email;
    public $password;
    public $rememberMe;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function performLogin() {
        $this->validate();

        $authAttempt = \Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ], $this->rememberMe);

        if ($authAttempt) {
            \Cookie::queue('user_token', $this->email, '3600');
            $this->redirect(route('home'));
        } else {
            $this->dialog()->error('Login failed', 'Invalid credentials');
        }
    }

    public function render()
    {
        return view('livewire.forms.auth-login');
    }
}
