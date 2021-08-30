<?php


namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{
	function workshop(){
		return $this->hasMany(static::class, 'id')->get();
	}
}
