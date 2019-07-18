$(document).ready(function(){
	
		$('#btnDeletePic').click(function(){
			
				$.post('control/changePhoto.php' , {deletePhoto : 'OK'} , function(data){alert(data)});
		});
});

