<!DOCTYPE html>
<html>
<head>
	<title>TutorScout Admin</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<p style=" position: fixed; bottom: 0; left: 0; width: 100%; text-align: center;">© Copyright 2014 TutorScout
</p>
<div class="container">

<nav class="navbar navbar-inverse">

	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('/') }}">Home</a></li>
		<li><a href="{{ URL::to('users') }}">View All Users</a></li>
		<li><a href="{{ URL::to('users/create') }}">Create a User</a><li>
</nav>

<h1 align="center">Showing {{ $user->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $user->name }}</h2>
		<p>
			<strong>Email:</strong> {{ $user->email }}<br>
			<strong>Level:</strong> {{ $user->user_level }}
		</p>
	</div>

</div>
</body>
</html>