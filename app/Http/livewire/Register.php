<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Validation\Rules\Unique;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Register extends Component
{
    use LivewireAlert;
    public $name, $email, $password;

    // protected $rules = [
    //     'name' => ['required', 'min:2'],
    //     'email' => ['required'],
    //     'password' => ['required', 'min:4']
    // ];

    // public function submit()
    // {
    //     $this -> validate();

    //     session() -> flash('success', 'User has been registered');

    //     $this->name = '';
    //     $this->email = '';
    //     $this->password = '';
    // }

    // public function register(Request $request) {
    //     $incomingFields = $request->validate([
    //         'name' => ['required', 'min:3', 'max:20', Rule::unique('users', 'name')],
    //         'email' => ['required', 'email', Rule::unique('users', 'email')],
    //         'password' => ['required', 'min:8']
    //     ]);

    //     $incomingFields['password'] = bcrypt($incomingFields['password']);

    //     $user = User::create($incomingFields);
    //     auth()->login($user);
    //     return redirect('/')->with('success', 'Thank you for creating an account.');
    // }
    // public function updated($property)
    // {
    //     $this->validateOnly($property);
    // }

    public function store()
    {
        if(empty($this->name) || empty($this->email) || empty($this->password))
        {
            if(empty($this->name))
            {
                $this->toast('Required', 'warning', 'User Name, Email and Password');
            }
            if(empty($this->email))
            {
                $this->toast('Required', 'warning', 'User Name, Email and Password');
            }
            if(empty($this->password))
            {
                $this->toast('Required', 'warning', 'User Name, Email and Password');
            }
        }
        elseif ($this->name && $this->email && $this->password)
        {
            // if(!($this->password == $this->password_confirmation))                               //check for confirm password
            // {
            //     $this->toast('Password and Confirm Password does not matched', 'warning', '');
            // }
            // else
            // {
                // $emailExists = User::where('email', $this->email)->exists();
                // if($emailExists)
                // {
                //     $this->toast('Unique Email to be entered', 'warning', '');
                // }

                $this->validate(['email' => 'required|email|unique:users']);     //makes sure entered email is unqiue

                User::create([
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' => $this->password,
                ]);

                $this->resetInput();
                $this->toast('Registered', 'success', 'Successfully');
            // }
        }
    }

    public function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->password = null;
    }

    public function toast($heading, $type, $text )
    {
        $this->alert($type, $heading, [
            'position' =>  'top-end',
            'timer' =>  '3000',
            'toast' =>  true,
            'text' =>  $text,
        ]);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
