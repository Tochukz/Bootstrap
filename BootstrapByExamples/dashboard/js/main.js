$(document).ready(function(){
	$('.loading').remove();
	
	//Initializing the tooltip plugin
	$('[data-toggle="tooltip"]').tooltip();


	$('.round-chart').easyPieChart({
		'scaleColor':false,
		'lineWidth':20,
		'lineCap':'butt',
		'barColor':'#6D5CAE',
		'trackColor':'#E5E9EC',
		'size':190
	});

	//Initializing the perfomance evaluation chart
	$('#performance-eval .spider-chart').highcharts({
		chart:{polar:true, type:'area'},
		title:{text:''},
		xAxis:{
			categories:['Taming', 'Acessory', 'Development', 'Grooming','Awareness','Ration'],
			tickmarkPlacement:'on',
			lineWidth:0
		},
		yAxis:{
			gridLineInterpolation:'polygon',
			lineWidth:0,
			min:0	
		},
		tooltip:{
			shared:true,
			pointFormat:'<span style="color:{series.color}">{series.name}:<b>${point.y:,.Of}</b><br />'
		},
		legend:{
			align:'right',
			verticalAlign:'top',
			y:70,
			layout:'vertical'
		},
		series:[{
			name:'Allocated resources',
			data:[45000, 39000, 58000, 63000, 38000, 93000],
			pointPlacement:'on',
			color:'#676F84'
		},
		{
			name:'Spent resources',
			data:[83000, 49000, 60000, 35000, 77000, 90000],
			pointPlacement:'on',
			color:'#F35958',
		}]
	});

	//Initializing the switchery plugin
	//The switchery plugin converts a checkbox to iOS switch.
	var elems, switcheryOpts;
	elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
	switcheryOpts = {
		color:'#1BC98E'
	};
	elems.forEach(function(el){
		var switchery =  new Switchery(el, switcheryOpts);
	});

	changeMultiplier = 2.0;
	window.setInterval(function(){
		var freeSpacePercentage;
		freeSpacePercentage = $('#free-space').text();
		freeSpacePercentage = parseFloat(freeSpacePercentage);
		delta = changeMultiplier * (Math.random() < 0.5? -1.0 : 1.0);	
		freeSpacePercentage = freeSpacePercentage + freeSpacePercentage *delta;
		freeSpacePercentage = parseInt(freeSpacePercentage);
		$('#free-space').text(freeSpacePercentage + '%');
	}, 2000);

	// $('#ration-stock .stacked-area').highcharts();

	//Initializing the daily usage pie chart
	$('#daily-usage .area-chart').highcharts({
		title:{text:''},
		tooltip:{
			pointFormat: '{series.name}:<b>{point.percentage:.if}%</b>'
		},
		plotOptions:{
			pie:{
				dataLabel:{enabled:true, style:{fontWeight:'300'}}
			}
		},
		series:[{
			type:'pie',
			name:'Time share',
			data:[
				['Front yard', 10.38],
				['Closet', 26.33],
				['Swim pool', 51.03],
				['Like a boss', 4.77],
				['Barking', 3.93]
			]
		}]
	});

	$('#search-icon').on('click', function(e){
		e.preventDefault();
		$('form#search').slideDown('fast');
		$('form#search input:first').focus();
	});

	$('form#search input').on('blur', function(e){
		if($('#search-icon').is(':visible')){
			$('form#search').slideUp('fast');
		}
	});


	//Setting the carousel slide inteval
	//You may also do this using the data-interval attribute
	$('.carousel').carousel({
		inerval:1000 //in milliseconda
	});

	//Initializing the scrollspy
	//To initialize the scrollspy using data attributes, place data-spy and data-target in the #content element
	// $('#content').scrollspy({
	// 	target:'#content-spy'
	// })

});
