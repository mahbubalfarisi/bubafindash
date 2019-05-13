<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenius extends Model
{
  	protected $fillable = [
    	'date',
    	'description',
    	'credit',
    	'debit'
  	];
}
