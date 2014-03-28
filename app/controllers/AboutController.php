<?php

class AboutController extends BaseController {

	public function getIndex()
	{
		$page_data = array(
			'page_id' => 'about_page'
		);

		if ($this->format == 'json')
		{
			return Response::json($page_data);
		}
		else 
		{	
			$this->layout->page_id = 'about_page';
			$this->layout->content = View::make('about.index', $page_data);
		}
	}
}