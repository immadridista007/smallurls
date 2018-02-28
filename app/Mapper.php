<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapper extends Model
{
    protected $fillable = ['key' , 'value'];

    public function generate() {
		$randomstr;
		do {
			$randomstr = str_random(10);
		} while (Mapper::where('value' , '=' , $randomstr)->get()->count() > 0);
		return $randomstr;
	}
}
