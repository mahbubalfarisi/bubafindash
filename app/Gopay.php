<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gopay extends Model
{
  	protected $fillable = [
    	'date',
    	'description',
    	'credit',
    	'debit'
  	];
}
