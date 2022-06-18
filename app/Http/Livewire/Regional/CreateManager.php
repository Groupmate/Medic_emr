<?php

namespace App\Http\Livewire\Regional;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class CreateManager extends Component
{
    public $firstname, $lastname, $email, $organization_id, $phone, $address, $sex, $date_of_birth,  $password, $role;
    public $modelId;

    /**
     * create a new manager
     *
     * @return void
     */
    public function create()
    {
        $this->validate();       
        // $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        // $shfl = str_shuffle($comb);
        $this->password = "password";
        $zonalManager = User::create($this->modeldata()); 
        session()->flash('messsage', 'Zonal Health Bureau Manager created successfully. By Default zonal manager passcode = password'); 
        // $http = new \GuzzleHttp\Client;

        // $response = Http::get('https://sms.hahucloud.com/api/send', [
        //     'key' => '946b92a598b36e4ad6aff1e4550d96d922656da4',
        //     'phone'  => $this->phone,
        //     'message' => 'Your password is '. $this->password,
        // ]); 
        $this->reset();
        
    }

    public function rules()
    {
        return [
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'organization_id'=>'',
            'phone'=>'required|size:13',
            'role'=>'required',
            'address'=>'required',
            'sex'=>'required',
            'date_of_birth'=>'required|before:today'
        ];
    }

    public function modeldata()
    {
        return[
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'email'=>$this->email,
            'organization_id'=>$this->organization_id,
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
        $userID = DB::select('select * from users where id = ?', [Auth::user()->id]);
        // dd($userID);
        return view('livewire.regional.create-manager', ['userID'=>$userID]);
    }
}
