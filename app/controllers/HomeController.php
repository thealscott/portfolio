<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	protected $layout = 'layouts.default';

	public function getIndex($value = null, $format = null)
	{
		if (!$value) $value = rand();

		$page_data = array(
			'first_name' => 'Al',
			'last_name' => 'Scott',
			'value' => $value
		);

		if ($format == 'json')
		{
			return Response::json($page_data);
		}
		else 
		{
			//return View::make('home.index', $page_data)->nest('partial_test', 'partials._test');	
			$this->layout->content = View::make('home.index', $page_data)
											->nest('partial_test', 'partials._test')
											->nest('partial_test2', 'partials._test2');	
		}
		
	}
}