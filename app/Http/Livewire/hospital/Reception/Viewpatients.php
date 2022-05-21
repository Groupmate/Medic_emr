<?php

namespace App\Http\Livewire\Hospital\Reception;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use App\Models\Patient;
use Livewire\WithPagination;
class Viewpatients extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $perpage=5;
    public $search='';
    //  public $patients;
    public $modalConfirmDeleteVisible=false;
    public $modelId;
    public $modelFormVisible=false;
    

    public $firstname, $lastname, $phone_no,  $profile_pic,  $patient_id, $data_of_birth, $email,
  $kebele, $zone, $woreda, $region, $cityname, $middelname, $sex;

    
    /**
     * deleteShowModel
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteShowModel($id)
    {
        $this->modelId=$id;
        $this->modalConfirmDeleteVisible=true;
    }


    public function updateShowModal($id)
    {
        $this->modelId = $id;
        $this->modelFormVisible=true;
         $this->loadModel();
    }

    public function delete()
    {
      Patient::destroy($this->modelId);
        $this->modalConfirmDeleteVisible=false;
        $this->resetpage();
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
        $this->modelFormVisible= false;
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
            $this->date_of_birth= $patient->date_of_birth;
          
            $this->profile_pic= $patient->profile_pic;
           
           
           

    }
    public function render()
    {
        
      
       
        return view('livewire.hospital.reception.viewpatients',['patients'=>patient::orderBy('id','DESC')->when($this->search,function($query,$search){
            return $query->where('firstname','LIKE',"%$search%");
        })->paginate($this->perpage)
    ]);
    }
   
    
    
}
