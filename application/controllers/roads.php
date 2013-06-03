<?php

class Roads_Controller extends Base_Controller {    
	public $restful = true;

    public function get_index()
    {
        return View::make('roads.index');
    }    

    public function get_roads($keyword)
    {         
        $roads = Road::search($keyword);
        if (empty($roads)) {
            return Redirect::to('/')->with('error', 'The road you searched for could not be found, check your spelling. If you are using place, way, court, or drive. Please replace them with the appropriate abbreviation, such as, pl, wy, ct, or dr; respectively.');
        } else {
            return View::make('roads.show')->with('roads', $roads); 
        }
        	
    }
    public function post_search()
    {
    	$keyword = str_replace(' ', '-', Input::get('keyword'));
    	$validate_road = Road::validate(array('street' => $keyword));
      
        if ($validate_road->passes()) {
            return Redirect::to_route('roads', $keyword)
    			->with('message', 'The road you searched for was found!');
    	} else {
            return Redirect::to_route('/')->with_errors($validate_road);
        }
    }

    public function get_about() {
        return View::make('roads.about');
    }
}