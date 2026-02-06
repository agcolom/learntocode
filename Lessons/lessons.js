function idText(language) {
	switch(language) {
			case("JavaScript"):
				return "js";
				break;
			case("Java"):
				return "jv";
				break;
			case("Python"):
				return "py";			
	}
}


//Construct compare tab sections
var compareTabCode = '<ul class="sortableTab">';
$( "ul.nav-tabs" ).each(function( index ) {
	$( "ul.nav-tabs").eq(index).append(
		'<li role="presentation"><a href="#compare' + (parseInt(index) + 1) + 
		'" aria-controls="compare' + (parseInt(index) + 1) + '" role="tab" data-toggle="tab">Compare</a></li>'
	);
	$( "div.tab-content").eq( index ).append( 
		'<div role="tabpanel" class="tab-pane" id="compare' + (parseInt(index) + 1) + '">' + 
		'<ul class="sortableTab"></ul>' 
	);
	$( "ul.nav-tabs:eq("+index+") > li").each(function( index2 ) {
		var tabTitle = $( "ul.nav-tabs > li" ).eq(index2).text();
		var shortId = idText(tabTitle);
		if (shortId !== undefined ) {
			$( ".sortableTab" ).eq( index ).append(
				'<li><label for="' + shortId + (parseInt(index) + 1) + 'Checkbox">' + tabTitle + '</label> <input type="checkbox" id="' + shortId + (parseInt(index) + 1) + 'Checkbox" checked>' + 
				$( ".tab-content" ).eq( index ).children( ".tab-pane" ).eq(index2).html() +
				'</li>'
			); 
		}
	});

});
	
$( ".sortableTab" ).sortable();
$( ".sortableTab" ).disableSelection();

// Show or hide code snippets according to checkbox choice
$(".tab-pane input[type='checkbox']").bind("click", function () {
	if( $(this).is(':checked')==true ) {
		$(this).next().show("blind");
	} else {
		$(this).next().hide("blind");		
	}
});

// Give user the possibility to rearrange the order of comparable code sections 

$('.nav-tabs li:nth-child(4n) a').bind("click", function () {
	$('.nav-tabs li:nth-child(4n) a').tab('show');
});

$('.nav-tabs li:nth-child(4n+1) a').bind("click", function () {
	$('.nav-tabs li:nth-child(4n+1) a').tab('show');
});

$('.nav-tabs li:nth-child(4n+2) a').bind("click", function () {
	$('.nav-tabs li:nth-child(4n+2) a').tab('show');
});

$('.nav-tabs li:nth-child(4n+3) a').bind("click", function () {
	$('.nav-tabs li:nth-child(4n+3) a').tab('show');
});
