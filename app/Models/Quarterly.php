<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarterly extends Model
{
    use HasFactory;

    protected $fillable = [
        "name" , 
        "image" , 
    ] ;


    public function articles()
    {
        return $this->hasMany(Article::class , "quarterly_id" , "id") ;
    }
}
