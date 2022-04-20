<?php

namespace App\Http\Livewire\Federal;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use App\Models\User;

class CreateManager extends Component
{

    public $a = 2;
    public $first_name, $last_name, $email, $orgn_id, $phone, $address, $sex, $date_of_birth, $type,
    $department, $password, $role;
    public $modelId;

    /**
     * create a new manager
     *
     * @return void
     */
    public function create()
    {
        //dd('asdfa');
        User::create($this->modeldata());
    }

    public function rules()
    {
        return [
            'first_name'=>'required',
        ];
    }

    public function modeldata()
    {
        return[
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'email'=>$this->email,
            'orgn_id'=>$this->orgn_id,
            'phone'=>$this->phone,
            'address'=>$this->address,
            'sex'=>$this->sex,
            'date_of_birth'=>$this->date_of_birth,
            'type'=>$this->type,
            'department'=>$this->department,
            'password' => $this->password,
            'role'=>$this->role,
        ];
    }

    public function render()
    {
        return view('livewire.federal.create-manager');
    }
}
