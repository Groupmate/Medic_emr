<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'type', 'region', 'zone', 'user_id',
        'woreda', 'kebele', 'city',
    ];

    public function user()
    {
        return $this->hasOne('\App\Models\User::class');
    }
}
