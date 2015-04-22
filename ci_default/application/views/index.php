<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Googlemaps API</title>
</head>
<body>
	<form action="/maps/directions" method="post">
		<label for="from">From: </label>
		<input type="text" id="from" name="from">
		<label for="to">To: </label>
		<input type="text" id="to" name="to">
		<input type="submit" value="Get directions!">
	</form>
</body>
</html>