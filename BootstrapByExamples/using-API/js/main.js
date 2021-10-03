$(document).ready(function(){
	// $('#single_toggle').button('toggle');

	$('#state_btn').on('click', function(e){
		var elem = $(e.currentTarget);
		//Deprecated after version 3.3.6, removed in version 4
		elem.button('statesample');
	});
	$('#state_btn').on('mouseover', function(e){
		var elem = $(e.currentTarget);
		//Deprecated after version 3.3.6, removed in version 4
		elem.button('reset');
	});
	$('#github-modal').on('show.bs.modal', function(e){
		$element = $(this);
		var url = 'https://github.com/users/{username}';
		url = url.replace(/{username}/, $('#github-username').val());

		$.get(url, function(data, status){
			console.log(data);
		});
	});

	$('#test-api').on('click', function(){
		var ButtonElem, serviceElem, json_data;
			buttonElem  = $(this);
			serviceDiv = buttonElem.parent();
		$.get('services/api_service.php', function(data, status){
			json_data = JSON.parse(data)
			for(var infosets in json_data){
				serviceDiv.append('<h3>'+infosets+ '</h3>');

				var infoSet = json_data[infosets]
				for(var userinfo in infoSet){
					serviceDiv.append(userinfo+': '+infoSet[userinfo]+'<br />');	
				}
				serviceDiv.append('<hr />');
			}
		});
	});

	
});