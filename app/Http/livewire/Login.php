<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Login extends Component
{
    // Public Properties were not defined

    public $name, $password;

    use LivewireAlert;
    public function render()
    {
        return view('livewire.login');
    }


    public function login()
    {
        $this->validate(['name' => 'required', 'password' => 'required']);
        if (Auth::attempt(['name' => $this->name, 'password' => $this->password])) {
            $this->toast('Authentication', 'success', 'Successful');
            return redirect()->to('/dashboard');
        } else {
            $this->toast('Warning', 'error', 'Wrong Credentials');
        }
        $this->resetInputs();
    }

    //OurApp method
    // public $loginname, $loginpassword;

    // public function login(Request $request) {
    //     $incomingFields = $request->validate([
    //         'loginname' => 'required',
    //         'loginpassword' => 'required'
    //     ]);

    //     if (auth()->attempt(['name' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])) {
    //         $request->session()->regenerate();
    //         $this->toast('Success', 'success', 'Login Complete');
    //         return redirect('/');
    //     } else {
    //         $this->toast('Failed', 'warning', 'Wrong Credentials');
    //     }

    //     $this->resetInputs();
    // }

    // AI method
    // public $name, $password;
    // public function login()
    // {
    //     $validatedData = $this->validate([
    //         'name' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $user = User::where('name', $validatedData['name'])->first();

    //     if ($user && Hash::check($validatedData['password'], $user->password)) {
    //         // Correct credentials, log in the user
    //         Auth::login($user);
    //         $this->toast('Success', 'success', 'Login Complete');
    //     } else {
    //         // Incorrect credentials, show an error message
    //         $this->toast('Failed', 'warning', 'Wrong Credentials');
    //     }
    // }

    public function toast($heading, $type, $text)
    {
        $this->alert($type, $heading, [
            'position' => 'top-end',
            'timer' => '3000',
            'toast' => true,
            'text' => $text,
        ]);
    }

    public function resetInputs()
    {
        $this->name = null;
        $this->password = null;
    }
}
