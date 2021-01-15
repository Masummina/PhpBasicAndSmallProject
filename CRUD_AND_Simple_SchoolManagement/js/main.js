$(document).ready(function(){
	$('#classCheck').blur(function(){
		var classCheck = $(this).var();
		$.Ajax({
			url:'',
			method: "POST",
			data: {classCheck:classCheck},
			dataType:"text",
		});
	});
})