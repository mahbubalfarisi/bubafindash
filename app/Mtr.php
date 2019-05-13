<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mtr extends Model
{
  	protected $fillable = [
    	'date',
    	'description',
    	'credit'
  	];
}
