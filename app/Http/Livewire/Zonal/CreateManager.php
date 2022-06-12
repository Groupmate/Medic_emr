<?php

namespace App\Http\Livewire\Zonal;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateManager extends Component
{
    public $firstname, $lastname, $email, $organization_id, $phone, $address, $sex, $date_of_birth, $password, $role;
    public $modelId;

    /**
     * create a new manager
     *
     * @return void
     */
    public function create()
    {
        $this->validate();
        User::create($this->modeldata());
        $this->reset();
    }

    public function rules()
    {
        return [
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'organization_id'=>'',
            'phone'=>'required',
            'address'=>'required',
            'sex'=>'required',
            'date_of_birth'=>'required',
        ];
    }

    public function modeldata()
    {
        return[
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'email'=>$this->email,
            'organization_id'=>5,
            'phone'=>$this->phone,
            'address'=>$this->address,
            'sex'=>$this->sex,
            'date_of_birth'=>$this->date_of_birth,
            'profile_pic'=> "12",
            'password' => Hash::make($this->password),
            'role'=>$this->role,
        ];
    }

    public function render()
    {
        return view('livewire.zonal.create-manager');
    }
}
