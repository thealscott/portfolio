<?php

class WorkController extends BaseController {

	public function getIndex()
	{
		$page_data = array(
			'page_id' => 'work_page'
		);

		if ($this->format == 'json')
		{
			return Response::json($page_data);
		}
		else 
		{	
			$this->layout->page_id = 'work_page';
			$this->layout->content = View::make('work.index', $page_data);
											// ->nest('partial_test', 'partials._clouds')
											// ->nest('header', 'partials._header');	

		}
	}
}