<?php

/** @var $this Contactform24ViewForm */

defined( '_JEXEC' ) or die; // No direct access
/**
 * Check if current request is AJAX.
 */
 

function badscript_is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH'])
    && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}



if (!isset($this->mail)) {
	
?>
       
        <h2 class="cattitle " id="myModalLabel">Обратная связь</h2>
     
<div class="modal-body">

	<h1></h1>
<form class="form-horizontal" target="index.php?option=com_contactform24&view=form&tmpl=component&format=raw" id="zak-form-modal">
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputfio" placeholder="Ваше Имя">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputemail" placeholder="E-mail">
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputtel" placeholder="Ваш телефон">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
  <textarea class="form-control" rows="3" id="inputcomment" placeholder="Текст сообщения"></textarea>
  </div>
  </div>
  <div class="form-group">
    <div class=" col-sm-12 text-center">
    <input type="hidden" value="<? echo $product;?>" class="" id="inputproduct">
      <button type="submit" class="btn btn-lg btn-warning btn-mebel">Отправить</button>
    </div>
  </div>
</form>
</div>
<script>
      jQuery('#zak-form-modal').on('submit', function(e) {
        e.preventDefault(); // предотвратим отправку формы - действие по умолчанию
        
		
		
		
		var that = jQuery(e.target); // получаем ссылку на источник события - форму #contact-form  
		
		// Получаем параметры
		var name = jQuery('#inputfio').val();
		var tel= jQuery('#inputtel').val();
		var email= jQuery('#inputemail').val();
		var comment= jQuery('#inputcomment').val();
		var product= jQuery('#inputproduct').val();
		
		if (!jQuery('#inputfio').val().length) {
			e.preventDefault();
     		 jQuery('#inputfio').parent().parent().addClass('has-error');
			return false;
			} else {
				 jQuery('#inputfio').parent().parent().removeClass('has-error');
				}
		if (!jQuery('#inputtel').val().length) {
			e.preventDefault();
     		 jQuery('#inputtel').parent().parent().addClass('has-error');
			return false;
			} else {
				 jQuery('#inputtel').parent().parent().removeClass('has-error');
				}
		
		   
       jQuery.ajax({ // отправляем данные          
		  type: "POST",
          url: 'index.php?option=com_contactform24&view=form&tmpl=component&format=raw',
          data: "name="+name+"&tel="+tel+"&email="+email+"&comment="+comment+"&product="+product+"&tasks=sending",
          success: function (data){
            //console.log(data); // проверим данные, полученные с бэкэнда
            if (data == 'Error') {
              alertForm({form: that, type: 'alert-danger', msg: 'Не удалось отправить сообщение.'});
              return;
            }
            alertForm({form: that, type: 'alert-success', msg: 'Ваше сообщение отправлено.'});
            that.find('textarea').val('');
          }, 
          error: function(){
            alertForm({form: that, type: 'alert-danger', msg: 'Не удалось отправить сообщение.'});
          }
        });
      });
      // функция вывода сообщений в модальную форму
      function alertForm(alert) {
        var div = jQuery('<div class="alert ' + alert.type + '" style="display: none;">' + alert.msg + '</div>');        
        alert.form.prepend(div);
        div.slideDown(400).delay(3000).slideUp(400, function() {
          alert.form.closest('.modal').modal('hide');
          div.remove();    
        });
      }
    </script>
<? } else { echo $this->mail;} 


 ?>