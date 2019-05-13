<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ovo extends Model
{
  	protected $fillable = [
    	'date',
    	'description',
    	'credit',
    	'debit'
  	];
}