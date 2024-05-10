//-----------Form Post Function--------------
$(document).ready(function () {

	$("body").click(function () {
		$('.Inpt').html('');
	});



	/*==============Page Form=========================*/
	$('.actionForm').on('submit', function (event) {
		$(".Inpt").html('');

		var formurl = $(".actionForm").attr('action');
		event.preventDefault();
		$.ajax({
			url: formurl,
			method: "POST",
			data: new FormData(this),
			dataType: 'JSON',
			contentType: false,
			cache: false,
			processData: false,
			beforeSend: function () {
				$("#loadpost").show();
			},
			success: function (data) {
				if (data.error) {
					$('.' + data.class_name).html('<div class="text-danger">' + data.error + '</div>');
					$("#loadpost").hide();
					$('input[name="' + data.class_name + '"]').focus();

				} else {

					$('.' + data.class_name).html('<div class="text-success">' + data.msg + '</div>');
					setTimeout(function () {
						$('.' + data.class_name).hide();
					}, 3000);
					$("#loadpost").hide();
					$(".txtfeild").val('');
				}
			}
		})
	});
});