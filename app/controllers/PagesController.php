<?php

class PagesController extends BaseController {

	public function getSpotifyURI()
	{
		$page_data = array(
			'page_id' => 'spotify_page'
		);

		if ($this->format == 'json')
		{
			return Response::json($page_data);
		}
		else 
		{	
			$this->layout->page_id = 'spotify_page';
			$this->layout->content = View::make('pages.spotify', $page_data);
		}
	}
}