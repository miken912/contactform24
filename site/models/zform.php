<?php



// No direct access

defined( '_JEXEC' ) or die;



/**

 *@author 24promo

 */

class Contactform24ModelZform extends JModelLegacy

{

    function getMail () {
			$app = JFactory::getApplication('site');
			$params = $app->getParams();
			
			
			$name=JRequest::getVar('name');
			$tel=JRequest::getVar('tel');
			$email=JRequest::getVar('email');
			$comment=JRequest::getVar('comment');
			$product=JRequest::getVar('product');
			
			
			
			
			
			
				$body = '<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td>Имя</td>
      <td>'.$name.'</td>
    </tr>
    <tr>
      <td>Телефон</td>
      <td>'.$tel.'</td>
    </tr>
  </tbody>
</table>' ;
			
			
			
			
			
			
			
			
			$from = array($params->get('from_email2'), "wwww");
			
			# Invoke JMail Class
			$mailer = JFactory::getMailer();
			
			# Set sender array so that my name will show up neatly in your inbox
			$mailer->setSender($from);
			
			# Add a recipient -- this can be a single address (string) or an array of addresses
			$mailer->addRecipient($params->get('to_email2'));
			
			$mailer->setSubject($params->get('subject2'));
			$mailer->setBody($body);
			
			# If you would like to send as HTML, include this line; otherwise, leave it out
			$mailer->isHTML();
			
			# Send once you have set all of your options
			$send = $mailer->Send();
			if ( $send !== true ) {
				return 'Error';
			} else {
				return 'Mail sent';
			}
				
	
	}



}