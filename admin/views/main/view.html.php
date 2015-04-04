<?php

defined( '_JEXEC' ) or die; // No direct access



/**

 * View for  current element

 * @author 24promo

 */

class Contactform24ViewMain extends JViewLegacy

{

	/**

	 * Method of display current template

	 * @param type $tpl

	 */

	public function display( $tpl = null )

	{

		$this->loadHelper( 'contactform24' );
		$this->addToolbar();
		parent::display( $tpl );

	}
	protected function addToolbar()
	{
	$bar = JToolBar::getInstance('toolbar');
	JToolbarHelper::title(JText::_('Формы заказа и Обратной связи'), 'address contact');
	JToolbarHelper::preferences('com_contactform24');
	}


}