<?php
defined( '_JEXEC' ) or die; // No direct access
/**
 * Component contactform24
 * @author 24promo
 */
$controller = JControllerLegacy::getInstance( 'contactform24' );
$controller->execute( JFactory::getApplication()->input->get( 'task' ) );
$controller->redirect();