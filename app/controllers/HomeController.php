<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		$page_data = array(
			'page_id' => 'home_page'
		);

		if ($this->format == 'json')
		{
			return Response::json($page_data);
		}
		else 
		{	
			$this->layout->page_id = 'home_page';
			$this->layout->content = View::make('home.index', $page_data);
											// ->nest('partial_test', 'partials._clouds')
											// ->nest('header', 'partials._header');	

		}
	}
}