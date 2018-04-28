<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
    	'name', 
    	'address',
    	'contact',
    	'type',
    	'grade',
    	'credit_limit',
    	'balance',
    	'date_from',
    	'date_to',
    	
   ];
}
