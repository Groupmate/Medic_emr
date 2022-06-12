<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employe;
use Livewire\WithPagination;
class Viewemployee extends Component
{
    use WithPagination; 
    public $modelFormVisible=false; public $modalConfirmDeleteVisible=false; public $modalViewDetailVisible=false;
    public $employes;
    public $firstname;  public $middel_name;  public $lastname;  public $user_id; public $organization_id; public $age;
    public $sex;  public $password; public $email; public $birth_date; public $image; public $type; public $phone; public $address;



    public function loadModel()
    {
        $employes=Employe::find($this->modelId);
            $this->firstname= $employes->firstname;
            $this->middel_name= $employes->middel_name;
            $this->lastname= $employes->lastname;
            $this->age= $employes->age;
            $this->user_id= $employes->user_id;
            $this->phone= $employes->phone;
            $this->address= $employes->address;
            $this->email= $employes->email;
            $this->sex= $employes->sex;
            $this->image= $employes->image;
            $this->organization_id= $employes->organization_id;
            $this->birth_date= $employes->birth_date;
            $this->type= $employes->type;
        
    }     


    public function read()
    {
        return Employe::paginate(5);
    }
    public function render()
    {
        $employes = Employe::latest()->paginate(5);
        return view('livewire.viewemployee',[ 'employes'=>$this->read(), 
        $this->employes=Employe::all(),]);
    }
}
