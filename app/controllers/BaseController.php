<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

    public function __construct()
    {
        // working but error on user module
        //$this->beforeFilter('auth', array('except' => 'getLogin'));

        // controllers in the array have to be authenticated before they can be viewed
        if(in_array( Request::segment(1), array('consultation','user', 'sponser','result','paymentlist','patient','consultation','item')) )
        {

            $this->beforeFilter('auth');
        }
    }

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
