<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersonsJurnal extends Model
{
    use HasFactory;

    protected $fillable = [

        "name"  , "role_id" , "job" , "link"
    ] ;

    public function role()
    {
        return $this->belongsTo(RolesJurnal::class , "role_id" , "id") ;
    }
}
