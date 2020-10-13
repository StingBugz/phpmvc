$(function(){

	$('.tampilModal').on('click', function(){

		$('#titleModal').html('Update Game');
		$('.modal-footer button[type=submit]').html('Update');
		$('.modal-body form').attr('action', 'http://localhost/phpmvc/public/Game/ubah');

		const id = $(this).data('id');

		$.ajax({

			url: "http://localhost/phpmvc/public/Game/getUbah",
			data: {id : id},
			method: "post",
			dataType: "json",
			success: function(data){
				console.log(data);
			}

		});
	});

});



	