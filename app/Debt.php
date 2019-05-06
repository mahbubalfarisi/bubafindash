<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
  protected $fillable = [
    'purpose',
    'creditor',
    'amount',
    'remaining'
  ];
}
