<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flexi extends Model
{
  	protected $fillable = [
    	'date',
    	'description',
    	'credit',
    	'debit'
  	];
}
