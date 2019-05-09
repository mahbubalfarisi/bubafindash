<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mandiri extends Model
{
  	protected $fillable = [
    	'date',
    	'description',
    	'credit',
    	'debit'
  	];
}
