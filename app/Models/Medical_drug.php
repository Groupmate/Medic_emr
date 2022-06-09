<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_drug extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'price', 'hospital_id','department','quantity','type','description','expired_date','photo'
  ];
    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }
}
