//Article -> Main -> (OptionPanel | 3o -> 2o)
$(document).ready(function() {

	//CSS Click Transformation (Next)
	$('.main-content-nav-panel-options-element-2o').click(function() {
		$('.main-content-grid-items-elements-area-item').css({
			'width': '650px'
		});
	});

	//CSS Click Transformation (Back)
	$('.main-content-nav-panel-options-element-3o').click(function() {
		$('.main-content-grid-items-elements-area-item').css({
			'width': '400px',
		});
	});

});