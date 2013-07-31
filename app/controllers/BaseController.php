<?php

class BaseController extends Controller {

	protected $format;
	protected $layout = 'layouts.default';

	public function __construct()
	{
		$this->format = Input::get('format', 'html');
	}


	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
}