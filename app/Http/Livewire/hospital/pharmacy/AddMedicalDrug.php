<?php

namespace App\Http\Livewire\Hospital\Pharmacy;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use App\Models\Hospital;
use App\Models\Employee;
use App\Models\Medical_drug;
class AddMedicalDrug extends Component
{
    use WithFileUploads;
    public $hospital_id,$price,$type,$department,$name,$expired_date,$quantity,$description,$photo,$hospital_a,$user_id;    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
       
        // $this->validate();
       
        Medical_drug::create($this->modeldata());
        // return redirect()->to('/room');
        session()->flash('message', 'medicaldrug saved Successfully.');
        $this->reset();
    }
    public function modelData()
    {
        $this->user_id = Auth()->user()->id;
        $hospital_a = Employee::where('user_id', $this->user_id)->first()->hospital_id;
        $this->hospital_id = $hospital_a;
        // dd($this->hospital_id);
        return [
            'name'=>$this->name,
            'hospital_id'=>$this->hospital_id,
            'type'=>$this->type,
            'expired_date'=>$this->expired_date,
            'description'=>$this->description,
            'quantity'=>$this->quantity,
            'price'=>$this->price,
            'photo'=>$this->photo,
            'department'=>$this->department,
             ];
    }    
    public function render()
    {
        return view('livewire.hospital.pharmacy.add-medical-drug');
    }
}
