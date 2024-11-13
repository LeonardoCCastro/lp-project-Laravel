<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UserManageComponent extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $role;

    public function render()
    {
        return view('livewire.user-manage-component');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,user',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->assignRole($this->role ?: 'user');

        session()->flash('success', 'Usuário criado com sucesso!');
        $this->reset(); // Limpa os campos do formulário
    }
}
