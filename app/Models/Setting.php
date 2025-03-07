<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';
    protected $guarded =[];

    /**
    * Upload file
    */
    const UPLOADPATH = 'imagrs/';

    /*
    * fields that will handel Upload documant
    */

    const UPLOADFIELDS =[];

    ##------------------------------- RELATIONSHIPS


    ##-------------------------------ATTRIBUTES


    ##-------------------------------CUSTOM FUNCTIONS
}
