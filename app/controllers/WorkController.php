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

	public function getShow($handle)
    {
    	$projects = array(
    		'ralph',
    		'tropicana'
    	);


    	if (in_array($handle, $projects)) {
    		$page_data = array(
				'page_id' => 'work_page',
				'handle' => $handle
			);

	        $this->layout->page_id = 'work_page';
	        $this->layout->content = View::make('work.show', $page_data);
    	}
    	else {
    		//TODO: work out how 404 routing and whatnot works in Laravel
    	}
    }
}