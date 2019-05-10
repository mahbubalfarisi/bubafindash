<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
  	protected $fillable = [
    	'date',
    	'description',
    	'credit',
    	'debit'
  	];
}
