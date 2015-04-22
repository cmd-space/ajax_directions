<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Googlemaps API</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('form').submit(function() {
				$('#directions').html('<img src="/assets/images/loading.gif">');
				$.post($(this).attr('action'), $(this).serialize(), function(res) {
					var htmlString = '';
					if(res.routes.length !== 0) {
						htmlString = '<h2>Directions from '+res.routes[0].legs[0].start_address+' to '+res.routes[0].legs[0].end_address+'</h2>';
						for(var i = 0; i < res.routes[0].legs[0].steps.length; i++) {
							htmlString += '<p>'+(i+1)+'. '+res.routes[0].legs[0].steps[i].html_instructions+'</p>';
						}
					}
					else {
						htmlString = 'Not Found';
					}
					$('#directions').html(htmlString);
				}, 'json');
				return false;
			});
		});
	</script>
	<style>
		h1 {
			display: inline-block;
		}
	</style>
</head>
<body>
	<form action="/maps/directions" method="post">
		<label for="from"><h1>From: </h1></label>
		<input type="text" id="from" name="from">
		<label for="to"><h1>To: </h1></label>
		<input type="text" id="to" name="to">
		<input type="submit" value="Get directions!">
	</form>
	<div id='directions'></div>
</body>
</html>