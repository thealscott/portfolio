<?php

class WorkController extends BaseController {

	public function getIndex()
	{
		$page_data = array(
			'page_id' => 'work_page',
			'project_handles' => Config::get('projects.handles')
		);

		if ($this->format == 'json')
		{
			return Response::json($page_data);
		}
		else 
		{	
			$this->layout->page_id = 'work_page';
			$this->layout->content = View::make('work.index', $page_data);
		}
	}

	public function getShow($handle)
    {
    	$projects = Config::get('projects.handles');


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