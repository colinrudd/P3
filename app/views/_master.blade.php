<!doctype html>
<html lang="en">

<!--
Author: Colin Rudd
-->
<head>
 
	<title>@yield('title')</title>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	
</head>

<body id=@yield('bodyid')>

	<h3>@yield('subtitle')</h3>
	<p>@yield('info')</p>
	<br />
	@yield('form')
	@yield('result')	


</body>
</html>