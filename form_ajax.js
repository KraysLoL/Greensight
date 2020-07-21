$('#form_ajax').submit(function(){
	$.post(
        'form.php', // адрес обработчика
         $("#form_ajax").serialize(), // отправляемые данные          

        function(msg) { // получен ответ сервера  
        	if (msg == 'Вы успешно зарегестрированы')
        	{
        		$('#form_ajax').hide();
        		$('#success').html(msg);
        	}
        	else
        		$('#error').html(msg);
        }
        );
	return false;
});