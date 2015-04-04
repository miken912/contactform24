<?php

defined( '_JEXEC' ) or die; // No direct access



/**

 * View for  current element

 * @author 24promo

 */

class Contactform24ViewForm extends JViewLegacy

{

	/**

	 * Method of display current template

	 * @param type $tpl

	 */

	public function display( $tpl = null )

	{
		
		  $ts = JRequest::getVar('tasks');
		
		if ($ts=='sending') {
			
			$this->mail = $this->get('Mail');
			
			}
		
			//$mail = $this->get('Mail');
		$this->loadHelper( 'contactform24' );

		parent::display( $tpl );

	}



}