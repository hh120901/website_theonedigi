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
});