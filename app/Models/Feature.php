<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $table = 'features';
    protected $guarded =['id'];

    /**
    * Upload file
    */
    const UPLOADPATH = 'images/';

    /*
    * fields that will handel Upload documant
    */

    const UPLOADFIELDS =[];

    ##------------------------------- RELATIONSHIPS


    ##-------------------------------ATTRIBUTES


    ##-------------------------------CUSTOM FUNCTIONS
}
