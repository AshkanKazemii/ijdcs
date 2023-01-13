<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesJurnal extends Model
{
    use HasFactory;

    protected $fillable = [ 
        "role"
    ] ;

    public function persons()
    {
        return $this->hasMany(PersonsJurnal::class , "role_id" , "id") ;
    }
}
