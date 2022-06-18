<?php

namespace App\Http\Livewire\Hospital\Hr;

use Livewire\Component;

use Livewire\WithFileUploads;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

class AddDoctor extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $modelFormVisible, $modalConfirmDeleteVisible, $modalViewDetailVisible=false;
    public $doctors;
    public $modelId;
    public $firstname, $lastname, $user_id, $organization_id=NULL, $sex, $password,
           $email, $date_of_birth, $profile_pic, $phone, $address, $hospital_id, $hospital_name,
           $department, $hospitals, $shift =[], $role=5, $speciality;


    /**
     * create store data to database
     *;
     * @return void
     */
    public function CreateDoctor()
    {
        $this->validate();
      
        $this->user_id = Auth()->user()->id;
        $hospital_name = 15;

        $user = User::create($this->userModelData());
        $this->user_id = $user->id;
        $doctor = Doctor::create($this->doctorModelData()); 
        $doctor->hospitals()->sync($hospital_name);
        $this->reset();
        session()->flash('message', 'Doctor registered Successfully.'); 
    }

    /**
     * update
     *
     * @return void
     */
    public function update()
    {
        $this->validate();
        Doctor::find($this->modelId)->update($this->modelData());
        $this->modelFormVisible= false;
        $this->reset();
    }

    /**
     * delete
     *
     * @return void
     */
    public function delete()
    {
        Employe::destroy($this->modelId);
        $this->modalConfirmDeleteVisible=false;
        $this->resetpage();
    }

    /**
     * modelData
     *
     * @return void
     */
    public function userModelData()
    {
        return [
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'password'=>$this->password,
            'email'=>$this->email,
            'organization_id'=>$this->organization_id,
            'role'=>6,
            'sex'=>$this->sex,
            'phone'=>$this->phone,
            'address'=>$this->address,
            'date_of_birth'=>$this->date_of_birth,
            'profile_pic'=>$this->profile_pic,
            'password' => Hash::make($this->password),
        ];
    }

    public function doctorModelData()
    {
        $ser_id = Auth()->user()->id;
        $hospitals = Hospital::where('user_id', $ser_id)->first();
        $this->hospitals = 15;

        return [
            'user_id'=>$this->user_id,
            'shift'=>$this->shift,
            'department'=>$this->department,
            'speciality'=>$this->speciality,
        ];
    }

    /**
     * rules validate
     *
     * @return void
     */
    public function rules()
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'sex' => 'required',
            'speciality' => 'required',
            'department' => 'required',
            'phone' => 'required|size:13',
            'date_of_birth' => 'required|before:today',
            'profile_pic' => 'required',
            'shift' => 'required', 
        ];
    }
    /**
     * read
     *
     * @return void
     */
    public function read()
    {
      return Doctor::paginate(5);
    }

    public function render()
    {
        return view('livewire.hospital.hr.add-doctor');
    }
}
