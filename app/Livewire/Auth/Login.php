<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

#[\Livewire\Attributes\Layout('components.layouts.login')]
class Login extends Component
{
    // #[\Livewire\Attributes\Rule('required','email')]
    public $email= '';
    // #[\Livewire\Attributes\Rule('required','min:6')]
    public $password= '';
    public function login(){
        // Auth::attempt($this->only(properties:'email','password') Versi request laravel biasa
        $validasi=$this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if(Auth::attempt($validasi)){
            return redirect()->route(route:'dashboard');   
        }
        else{
            return redirect()->route('login')->with('error','Email/Password salah');
        }
        dd('Hallo');
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
