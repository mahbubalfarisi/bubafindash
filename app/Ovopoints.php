<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ovopoints extends Model
{
  	protected $fillable = [
    	'date',
    	'description',
    	'credit',
    	'debit'
  	];
}
