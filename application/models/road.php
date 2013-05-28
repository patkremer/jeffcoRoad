<?php

class Road extends Eloquent 
{
 
	public static function search($keyword)
	{
		return DB::query('SELECT *
						  FROM roads
						  WHERE street LIKE ?', array('%'.$keyword.'%'));
	}

}