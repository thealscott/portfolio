<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		$value = rand();

		$page_data = array(
			'page_id' => 'home_page',
			'first_name' => 'Al',
			'last_name' => 'Scott',
			'value' => $value
		);

		if ($this->format == 'json')
		{
			return Response::json($page_data);
		}
		else 
		{	
			$this->layout->page_id = 'home_page';
			$this->layout->content = View::make('home.index', $page_data)
											->nest('partial_test', 'partials._test')
											->nest('partial_test2', 'partials._test2');	

		}
	}
}