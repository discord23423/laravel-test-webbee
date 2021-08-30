<?php

namespace App\Models;

use App\Models\Workshop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
  function workshops()
    {
        return $this->hasMany('App\Models\Workshop');
    }
}
