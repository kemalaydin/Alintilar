<?php

class BaseController extends Controller {


	public $rightPeople; 

    public function __construct() {
        //parent::__construct();
        
        $this->rightPeople = Person::all();
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