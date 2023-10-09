<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{

    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    protected function rules()
{
    return   [
        'email'=>'required|email|unique:users',
        'password'=>'required|min:6|max:255|same:passwordConfirmation'
    ];
}

//test

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

// public function updatedEmail(){
//     $this->validate(['email'=>'unique:users']);
// }

    public function register(){

        $data = $this->validate([
            'email'=>'required|email|unique:users',
        'password'=>'required|min:6|max:255|same:passwordConfirmation'
        ]);

       $user = User::create([
            'email'=>$this->email,
            'name'=>$this->email,
            'password'=>Hash::make($this->password),
        ]);

        auth()->login($user);
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
