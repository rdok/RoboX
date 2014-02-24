$(document).ready(function() {
	
	$('#price_id').focusout(function(e) {
		var str = $(this).val();
		if ( !str.match("^[0-9]+(.{1}[0-9]+)?$") ) {
			slideToggleOn(this.id + '_error');
		} else {
			slideToggleOff(this.id + '_error');	
		}
	});;
	
	$('#product_name_id').focusout(function(e) {
		var str = $(this).val();
		if (!str.match("^[a-zA-Z0-9]{3,}$")) {
			slideToggleOn(this.id + '_error');
		} else {
			slideToggleOff(this.id + '_error');	
		}
	});;
	
	// alert user if img file size > 5MB.
	$('#file_1_id').bind('change', function() {
		checkImgSize(this);
	});
	$('#file_2_id').bind('change', function() {
		checkImgSize(this);
	});
	$('#file_3_id').bind('change', function() {
		checkImgSize(this);
	});
	
});

function checkImgSize(dom) {
	var ext = $('#' + dom.id).val().split('.').pop().toLowerCase();
	if (dom.files[0].size > 5242880 
		|| $.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
		slideToggleOn(dom.id + '_error');
	} else {
		slideToggleOff(dom.id + '_error');
	}
}

function slideToggleOn(id) {
	if ( !$('#' + id).is(':visible') ) {
		$('#' + id).slideToggle('fast');
	}
	
}

function slideToggleOff(id) {
	if ($('#' + id).is(':visible')) {
		$('#' + id).slideToggle('fast');
	}
}