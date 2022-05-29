<?php

namespace App\Http\Livewire\Hospital\Reception;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\User;
use Carbon\Carbon;

class AssignPatient extends Component
{    
    use WithPagination;
    use WithFileUploads;

    public $perpage=5;
    public $search='';
    //  public $patients;
   
    public $modelId;
    public $modalFormVisible=false;
    public $modalEditFormVisible=false;

    public $firstname, $lastname, $phone_no,  $profile_pic,  $patient_id, $data_of_birth, $email,
    $kebele, $zone, $woreda, $region, $cityname, $middelname, $sex;
    public $user_id, $doctors=[], $available_doctors;
    
    /**
     * deleteShowModel
     *
     * @param  mixed $id
     * @return void
     */
    


    public function updateShowModal($id)
    {
        $this->modelId = $id;
        $this->modalEditFormVisible=true;
         $this->loadModel();
    }

   
    /**
     * update
     *
     * @return void
     */
    public function update()
    {
        $this->validate();
        Patient::find($this->modelId)->update($this->modelData());
        $this->modalEditFormVisible= false;
        // $this->resetvars();
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
            'data_of_birth'=>$this->data_of_birth,
      
            
            'region'=>$this->region,
            'zone'=>$this->zone,
            'woreda'=>$this->woreda,
            'kebele'=>$this->kebele,
            'cityname'=>$this->cityname,
        ];
    }       
    /**
     * rules validation
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
            // 'date_of_birth'=>'required',
            'woreda'=>'required',
            
        ];
    }     
    /**
     * loadModel
     *
     * @return void
     */
    public function loadModel()
    {
        $patient=Patient::find($this->modelId);
            $this->firstname= $patient->firstname;
            $this->lastname= $patient->lastname;
            $this->middelname= $patient->middelname;
            $this->patient_id= $patient->patient_id;
            $this->phone_no= $patient->phone_no;
            $this->email= $patient->email;
         
            $this->region= $patient->region;
            $this->zone= $patient->zone;
            $this->woreda= $patient->woreda;
            $this->kebele= $patient->kebele;
            $this->cityname= $patient->cityname;
            $this->sex= $patient->sex;
       
            $this->data_of_birth=$patient->data_of_birth;
            $this->profile_pic= $patient->profile_pic;
           
           
           

    }
    /**
     * createShowModal
     *
     * @return void
     */
    public function createShowModal()
    {
        $this->resetValidation();
        $this->reset();
        $date = Carbon::now();
        $date = date('l');

        $doctor = Doctor::all();
        foreach($doctor as $doctor)
        {
            $shift = $doctor->shift;
            foreach($shift as $shift)
            {
                if($shift == $date)
                {
                    $this->doctors[] = Doctor::where('id', $doctor->id)->first();
                }
            }
        }
        
        $this->modalFormVisible=true;
    }

    public function create()
    {
        dd($this->user->id);
    }
    
    // public function render()
    // { 
    //     $users = User::all();

    //     return view('livewire.hospital.reception.assign-patient',  [
    //         $this->patients = Patient::all(),$this->doctors,
    //     ])->with('users', $users);
    // }
    public function render()
    {
        $users = User::all();
        return view('livewire.hospital.reception.assign-patient')->with(['patients'=>patient::orderBy('id','DESC')->when($this->search,function($query,$search){
            return $query->where('firstname','LIKE',"%$search%");
        })->paginate($this->perpage)],$this->doctors)->with('users', $users);
    }
}
