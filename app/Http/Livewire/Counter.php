<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use livewire\WithPagination;

class Counter extends Component
{

    public $name;
    public $email;
    public $password;
    public $perPage = 5;
    public $sort = 'asc';
    public $search='';

    public function render()
    {
        $data = ['name' => 'prince', 'email' => 'prince@gmail.com'];
        $users = User::where('name',"like", "%".$this->search."%")->OrderBy('id', $this->sort)->paginate($this->perPage);
        return view('livewire.counter', [
            'count' => $data,
            'users' => $users
        ]);
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            // 'name' => 'required|min:6',
            'email' => 'required|email|unique:users,email,except,id',
            'password' => 'required|min:6',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,except,id',
            'password' => 'required|min:6',
        ]);
        // save user
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
        // clear form
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }
}
