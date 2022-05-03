<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Doctor;
use App\Models\Service;


class DoctorShift extends Component
{ 
    
    public function render()
    {
        // $posts = Post::orderBy("created_at","desc")->paginate(2);
        // $sections = Section::orderBy("created_at","desc")->paginate(2);
        //  return view('index')->with('posts',$posts)->with('sections',$sections);
    
        $dname = Doctor::all();
        $shift = Service::all();
        return view('livewire.doctor-shift')->with('dname',$dname)->with('shift',$shift)
        ;
    }
}
