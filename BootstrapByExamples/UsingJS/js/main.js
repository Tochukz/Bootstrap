$(document).ready(function(){
	//The tweet count functionality
	var $charCount, maxCharCount;
	$charCount = $('#tweet-modal .char-count');
	maxCharCount = parseInt($charCount.data('max'), 10);

	$('#tweet-modal textarea').on('keyup', function(e){
		var tweetLength = $(e.currentTarget).val().length;
		$charCount.html(maxCharCount-tweetLength);
	})
	
	//Initializing the tooltip functionality
	$('[data-toggle="tooltip"]').tooltip();

	//Initializing the popover functionality, and adding content.
	var popoverContentTemplate = ''+
								'<img src="img/tw.gif" class="img-rounded"/>'+
								'<div class="info">'+
									'<strong>Person </strong>'+
									'<a href="#" class="btn btn-default">'+
										'<span class="glyphicon glyphicon-plus"></span> Follow'+
									'</a>'+
								'</div>'; //There is an optimized way of doing this i.e better way

	$('[data-toggle="popover"]').popover({
		placement:'bottom',
		html:true,
		content:function(){
			return popoverContentTemplate;
		}
	});

	//This code will run just when the popover event occurs. It changes the glyphicon and text of the follow botton
	$('[data-toggle="popover"]').on('show.bs.popover', function(){
		var $icon = $(this).find('span.glyphicon');
		$icon.removeClass('glyphicon-plus').addClass('glyphicon-ok');
		$(this).append('ing');
	});

	/*
	  This will correct for the glitches that occurs when we apply affix to the div#profile element.
	  Affix data attribute swtiches the element positioning from static to fixed and takes the element out of the normal flow of the grid.
	  This function ensures that other element of the page do not overlay/underlay the  element.
	*/
	$('#profile').on('affix.bs.affix', function(){
		$(this).width($(this).width()-1);
		$('#main').addClass('col-md-offset-3');
	}).on('affix-top.bs.affix', function(){
		$(this).css('width','');
		$('#main').removeClass('col-md-offset-3');
	});

	//This function will execute just before the modal call is exceuted
	// $('#tweet-modal').on('show.bs.modal',function(){
	// 	$('#tweet-modal textarea').val('Tochukwu is a programmer');
	// })

	//Showing the tool tip of the element with id 'text-tool'
	// $('#text-tool').tooltip('show');

	//My inplementation of the tweet count functionality
	// var maxChar = 140;
	// $('#tweet-txt').keyup(function(){
	// 	var textElem, textCount, charCount,
	// 		textElem =$('#tweet-txt');
	// 		countElem = $('.char-count');
	// 		textCount = textElem.val().length;
	// 		remainingCount= maxChar - textCount;
	// 		countElem.text(remainingCount);
	// });
});