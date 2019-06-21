//ArticleItem -> Main -> (ItemsTransformations | PhotoHover | Notifications)
$(document).ready(function() {

	// Mouseover function on item elements
	$('.main-content-acticle-another-item-top-photo').mouseover(function() { 
		let articleMainItemPhotoID = $(this).attr('id'); // photo-div id
		let articleMainItemNotifyID = articleMainItemPhotoID + '-notify'; // notify-div id

		// CSS Transfomations (Next)
		$('#' + articleMainItemPhotoID).css({
			'opacity': '0.7'
		});

		$('#' + articleMainItemNotifyID).css({
			'opacity': '1',
			'bottom': '250px'
		});
	});

	// Mouseout function on item elements
	$('.main-content-acticle-another-item-top-photo').mouseout(function() {
		let articleMainItemPhotoID = $(this).attr('id'); // photo-div id
		let articleMainItemNotifyID = articleMainItemPhotoID + '-notify'; // notify-div id

		// CSS Transfomations (Back)
		$('#' + articleMainItemPhotoID).css({
			'opacity': '1'
		});

		$('#' + articleMainItemNotifyID).css({
			'opacity': '0',
			'bottom': '0px'
		});
	});

});