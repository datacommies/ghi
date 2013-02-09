<?php
/**
 * Description of ic_controller
 *
 * @author John
 */
class ic_controller extends Application 
{
  /*
	 * Sets up the (display) index for the form created in add_form.php
	 */
    function index() 
	{
		// Getting the form
        $this->data['pagebody'] = "add_form";
		
		// Setting up initial values
		$record = array('name'=>'', 'id'=>'', 'quantity'=>'', 'price'=>'', 'producer'=>'');
		$this->data = array_merge($this->data, $record);

		// Rendering
        $this->render();
		
		// posting for index
		$this->contacts->add($_POST);
		redirect('/');
    }

}

