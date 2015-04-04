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
		$this->default_view = 'main';
		parent::display( $cachable, $urlparams);
	}

}