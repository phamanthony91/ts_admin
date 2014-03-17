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
	</ul>
</nav>

<h1>Create a User</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'users')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('user_level', 'User Level') }}
		{{ Form::select('user_level', array('0' => 'Select a Level', '1' => 'Grade School', '2' => 'High School', '3' => 'College'), Input::old('user_level'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the User!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>