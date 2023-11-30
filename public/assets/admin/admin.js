$(document).ready(function () {
	$('.btn-check-all').on('change', function(){
		let getAllCheckBox = $('.checkbox-manage-content');
		getAllCheckBox.prop('checked', $(this).prop('checked'));
	})
	$('.checkbox-manage-content').on('change', function(){
		if (!$(this).prop('checked')) {
			$('.btn-check-all').prop('checked', false);
		}
		if ($(".checkbox-manage-content:checked").length === $(".checkbox-manage-content").length) {
			$('.btn-check-all').prop('checked', true);
		}
	})
	$(".btn-save").click(function(){
		submitButton("save");
	});

});
/**
 * Default function.  Usually would be overriden by the component
 */
function submitButton(pressButton, formAction) // save, undefined
{
	submitForm(pressButton, formAction);
}

/**
 * Submit the admin form
 */
function submitForm(pressButton, formAction)
{
	if (pressButton) {
		document.adminForm.task.value=pressButton;
		console.log(document.adminForm.task.value);
	}
	if (formAction) {
		document.adminForm.action = formAction;
	}
	if (typeof document.adminForm.onsubmit == "function") {
		document.adminForm.onsubmit();
	}
	document.adminForm.submit();
}