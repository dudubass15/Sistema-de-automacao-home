$(function(){

	$('#envia_form').submit(function(event){
		event.preventDefault();
		var formDados = new FormData($(this)[0]);

		$.ajax({
			url:'models/envia_msg.php',
			type:'POST',
			data:formDados,
			cache:false,
			contentType:false,
			processData:false,
			success:function (data)
		{

			$('#envia_msg').each (function(){
			this.reset();
           });
		},
			dataType:'html'
		});
		return false;
	});
});