<?php

namespace App\Http\Livewire\Hospital\Reception;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use App\Models\Patient;

class RegisterPatient extends Component
{
    use WithFileUploads;

    public $firstname, $lastname, $phone_no, $profile_pic, $patient_id, $date_of_birth,
     $email,$kebele, $zone, $woreda,$region, $cityname, $middelname, $sex;


    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $this->validate();
        $this->profile_pic = $this->profile_pic->store('image','public');
        Patient::create($this->modeldata());
        session()->flash('message', 'patient registered  Successfully.');
        $this->reset();
    }

    /**
     * modelData
     *
     * @return void
     */
    public function modelData()
    {
        return [
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'sex'=>$this->sex,
            'middelname'=>$this->middelname,
            'patient_id'=>$this->patient_id,
            'phone_no'=>$this->phone_no,
            'email'=>$this->email,
           
            'profil_pic'=>$this->profile_pic,
            'data_of_birth'=>$this->date_of_birth,
          

            'region'=>$this->region,
            'zone'=>$this->zone,
            'woreda'=>$this->woreda,
            'kebele'=>$this->kebele,
            'cityname'=>$this->cityname,
        ];
    }
    /**
     * validation rule
     *
     * @return void
     */
    public function rules()
    {
        return [
            'firstname'=>'required',
            'lastname'=>'required',
            'middelname'=>'required',
            'region'=>'required',
            'profile_pic'=>'required',
            'patient_id'=>'required',
            'date_of_birth'=>'required',
            'woreda'=>'required',

        ];
    }
    public function render()
    {
        return view('livewire.hospital.reception.register-patient');
    }
}
