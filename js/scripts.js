jQuery(function ($) {
	'use strict';
  	$(function() {
  		$('body').on('click', '#modal_show_1, #modal_show_2', function(){
	  		$('#upload_image').modal('show');
  		});
  	});
});