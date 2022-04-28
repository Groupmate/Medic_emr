<?php

namespace App\Http\Livewire\Hospital\Reception;
use Livewire\Component;
use App\Models\Patient;
use Livewire\WithPagination;


class Viewpatient extends Component
{
    use WithPagination;
    public $active;
    public $q;
    public $sortBy ='id';
    public $sortAsc = true;

    //For url to change
    protected $queryString = [ 
        'active' =>['except'=>false],
        'q'      =>['except'=>''],
        'sortBy' =>['except'=>'id'],
        'sortAsc' =>['except'=>true]
    ];

    public function render()
    {
        //return view('livewire.patient');
        $patient = Patient::where('user_id', auth()->user()->id)
           ->when($this->q, function($query) {
            return $query->where(function($query) {
                $query->where('id', 'like', '%' .  $this->q . '%')
                      ->orwhere('lastname', 'like', '%' . $this->q . '%');

            });

        })
           ->when($this->active, function ($query){
                return $query->active();
           })
          ->orderBy( $this->sortBy, $this->sortAsc ? 'ASC': 'DESC');
         
          $query   = $patient->toSql();
          $patient = $patient->paginate(8);
          return view('livewire.hospital.reception.viewpatient', [
        // return view('livewire.patients', [
         'patient' => $patient
        ]);
    }
    public function sortBy($feild){
        if($feild == $this -> sortBy) {

            $this->sortAsc =!$this->sortAsc;
        }
        $this ->sortBy = $feild;
    }
}
 