<?php

namespace App\Livewire\Settings;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class DeleteUserForm extends Component
{
    public $password = '';

    public function deleteUser()
    {
        $this->validate([
            'password' => ['required', 'string', 'current_password'],
        ]);

        Auth::user()->delete();

        session()->flash('status', 'account-deleted');

        return $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.settings.delete-user-form');
    }
}