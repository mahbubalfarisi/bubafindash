<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linkaja extends Model
{
  	protected $fillable = [
    	'date',
    	'description',
    	'credit',
    	'debit'
  	];
}
