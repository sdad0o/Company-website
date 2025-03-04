<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $table = 'subscribers';
    protected $guarded =['id'];

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
