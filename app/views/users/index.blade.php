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

<h1>All the Users</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>User Level</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->name }}</td>
			<td>{{ $value->email }}</td>
			<td>{{ $value->user_level}}</td>
			
			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the user (uses the destroy method DESTROY /users/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
				{{ Form::open(array('url' => 'users/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this User', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the user (uses the show method found at GET /users/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('users/' . $value->id) }}">Show this User</a>

				<!-- edit this user (uses the edit method found at GET /users/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/edit') }}">Edit this User</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>