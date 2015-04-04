<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class Contactform24ViewZform extends JViewLegacy
{
    function display($tpl = null)
    {
		
		 $ts = JRequest::getVar('tasks');
		
		if ($ts=='sending') {
			
			$this->mail = $this->get('Mail');
			
			}
        parent::display($tpl);
    }
}