<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';
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
