<?php

namespace App\Http\Livewire\Hospital\Reception;

use Livewire\Component;
use App\Models\Patientss;
use Livewire\WithPagination;
class Viewpatients extends Component
{
    use WithPagination;

    public $perpage=2;
    public $search='';
    //  public $patients;
    public $modalConfirmDeleteVisible=false;
    public $modelId;
    public $modelFormVisible=false;

    public $firstname; public $lastname; public $phone_no; public $profil_pic; public $patient_id; public $birth_of_date; public $email;
    public $religion;public $blood_group;public $kebele;public $zone;public $wereda;public $region;public $cityname;public $marriage_status;

    
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
        //  $this->loadModel();
    }

    public function delete()
    {
      Patientss::destroy($this->modelId);
        $this->modalConfirmDeleteVisible=false;
        $this->resetpage();
    }

    public function render()
    {
        
      
       
        return view('livewire.hospital.reception.viewpatients',['patients'=>patientss::orderBy('id','DESC')->when($this->search,function($query,$search){
            return $query->where('firstname','LIKE',"%$search%");
        })->paginate(2)
    ]);
    }
   
    
    
}
