<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crypto extends Model
{
  	protected $fillable = [
    	'date',
    	'value',
    	'balance'
  	];
}
