<?php

class Road extends Eloquent 
{
	public static $table = 'roads';
 	public static $rules = array(
 		'street' => 'required:exists:roads,street',
 	);
 	public static $messages = array(
 		'street_required' => 'Please input a street name to continue.',
 		'exists' => 'The road you searched for could not be found. Please try again and check your spelling.'
 	);

 	public static function validate($input) 
 	{
 		return Validator::make($input, static::$rules, static::$messages);
 	}

	public static function search($keyword)
	{
		$find = str_replace('-', ' ', $keyword);
		return DB::query('SELECT *
						  FROM roads
						  WHERE street LIKE ?', array('%'.$find.'%'));
	}

}