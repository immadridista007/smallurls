<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapper;

class MappersController extends Controller
{
    //

	public function get() {
		return view ('welcome');
	}

    public function post (Request $request) {
    	$rules = [
    		'key' => 'required' , 
    	];
    	$validatedData = $request->validate($rules);
    	//dd ($request->input('key'));

    	if (Mapper::where('key' , '=' , $request->input('key'))->get()->count() > 0) {
    		return view ('short')->with('mappers' , Mapper::where('key' , '=' , $request->input('key'))->get()->first());
    	}

    	$mapper = new Mapper();
    	$mapper->key = $request->input('key');
    	$mapper->value = $mapper->generate($request->input('key'));
    	$mapper->save();
    	//dd ($mapper);
    	return view ('short')->with('mappers' , $mapper);
    }

    public function show (Request $request) {
    	$rules = [
    		'value' => 'required' ,

    	];
    	$request->validate($rules);
    	$mapper = Mapper::where('value' , '=' , $request->input('value'))->get();
    	if ($mapper->count() === 0) {
            $bugs = "No such small url exists";
    		return redirect('/')->with('bugs' , $bugs);
    	}
    	return view ('show')->with('mappers' , $mapper);
	}
}
