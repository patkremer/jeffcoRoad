<?php

class Roads_Controller extends Base_Controller {    
	public $restful = true;

    public function get_index()
    {
        return View::make('roads.index');
    }    

    public function get_roads($keyword)
    {  
        $find = str_replace('%20', ' ', $keyword);
        return View::make('roads.show')
    		->with('roads', Road::search($find));
    }
    public function post_search()
    {
    	$keyword = Input::get('keyword');
    	if (empty($keyword)) {
    		return Redirect::to_route('/')
    			->with('message', 'No roads found!');
    	}
    	return Redirect::to('roads/'.$keyword);
    }

    public function get_about() {
        return View::make('roads.about');
    }
}