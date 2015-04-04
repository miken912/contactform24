<?php

defined( '_JEXEC' ) or die; // No direct access



/**

 * Default Controller

 * @author 24promo

 */

class Contactform24Controller extends JControllerLegacy

{

	/**

	 * Methot to load and display current view

	 * @param Boolean $cachable

	 */

	function display( $cachable = false, $urlparams = array())

	{
			/*$document = JDocument::getInstance('raw');  //this new instance is a raw document object
	$viewType = $document->getType();
	// $viewname below is set in jinput or as you named it
	$this->getView($viewName, $viewType); 
	$this->input->set('view', $viewName);*/
		$this->default_view = 'form';

		parent::display( $cachable, $urlparams);

	}



}