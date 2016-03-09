$(function () {
	if ($( "body" ).has( "input[type='checkbox']" ).length) {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' // optional
		});

		$(".checkbox-toggle").click(function () {
			var clicks = $(this).data('clicks');
			if (clicks) {
				//Uncheck all checkboxes
				$(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
				$(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
			} else {
				//Check all checkboxes
				$(".mailbox-messages input[type='checkbox']").iCheck("check");
				$(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
			}
			$(this).data("clicks", !clicks);
		});
	}
	
	if ($( "body" ).has( "textarea" ).length) {
		$(".textarea").wysihtml5();
	}
	
	if ($( "body" ).has( "input[type='file']" ).length) {
		$("input[type='file']").customFileInput();
	}
});