<html>
<head>
<meta http-equiv="content-type" content="text/html; charshet=iso-8859-1" />
<title>Operasi CRUD</title>
<style>
div.container {
	width:100%;
	border: 1px solid gray;
}
header, footer {
	padding: 1em;
	color:#FFFFFF;
	background-color:#663300;
	clear:left;
	text-align :center;
}
nav {
	float:left; 
	max-width: 160px;
	margin:0;
	padding:1em;
}
nav ul {
	list-style-type:none;
	padding:0;
}
nav ul a{
	text-decoration:none;
}
article {
	margin-left:170px;
	border-left:1px solid gray;
	padding:1em;
	overflow:hidden;
}
</style>
</head>
<body>
<div class="container">
<header>
@include('layout.header')
</header>
<nav>
@include('layout.nav')
</nav>
<article>
@yield('content')
</article>
<footer>@include('layout.footer')</footer>
</div>
</body>
</html>