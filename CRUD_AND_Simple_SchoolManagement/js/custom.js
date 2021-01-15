$(document).ready(function(){
	$('#classCheck').change(function(){
		var className = $(this).val();
		$.ajax({
			url: 'include/checkStudent.php',
			method: 'POST',
			data: {className:className},
			dataType:'text',
			success:function(data){
				$('#classStudent').html(data);
			}
		});
	});

	// result submit

	$('#StudentName').change(function(){
		var StudentName = $(this).val();
		$.ajax({
			url: 'include/checkStudent.php',
			method: 'POST',
			data: {StudentName:StudentName},
			dataType:'text',
			success:function(data){
				var stlen = data.length;
				$('#stdname').empty(data);
					for(var i = 0; i < stlen; i++){
						var id = data[i]['id'];
						var name = data[i]['name'];
						var fatname = data[i]['fatname'];
						var motName = data[i]['motName'];
						var motName = data[i]['motName'];
						var stdage = data[i]['stdage'];
						var stdimg = data[i]['stdimg'];
						var classname = data[i]['classname'];
						$("#stdname").append('name');
					}
				var obj = JSON.parse(data);

				//$('#studentmsg').html(obj);
				$('#stdname').val(obj.name);
				$('#mot_name').val(obj.motName);
				$('#fat_name').val(obj.fatname);
				$('#std_roll').val(obj.stdage);
				$('#std_class_name').val(obj.classname);
			}
		});
	})

	// Department feild Show
	$('#department').change(function(){
		var department = $(this).val();
		// alert(department);
		$.ajax({
			url: 'include/checkStudent.php',
			method: 'POST',
			data: {department:department},
			dataType:'text',
			success:function(data){
				$('#department_feild').html(data);
			} 
		})
	})


});