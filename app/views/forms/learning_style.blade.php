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
		<li><a href="{{ URL::to('/learning_style') }}">Learning Style Questions</a><li>
	</ul>
</nav>

<h3> Take Your Learning Style Survey! </h3>

{{ Form::open(array('url' => 'learning_style')) }}

	<div class="form-group">
		{{ Form::label('learning_style', '1. I learn something better when I') }} <br>
		{{ Form::radio('learning_style1', 'try') }} try it out. <br>
		{{ Form::radio('learning_style1', 'think') }} think it through.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '2. It is easy for me to remember things when' ) }} <br>
		{{ Form::radio('learning_style2', 'discuss' ) }} discuss it with someone else. 
		<br>
		{{ Form::radio('learning_style2', 'myself.') }} think to myself.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '3. I learn better when I') }} <br>
		{{ Form::radio('learning_style3', 'groups') }} work in groups. <br>
		{{ Form::radio('learning_style3', 'individual') }} work individually.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '4. I tend to') }} <br>
		{{ Form::radio('learning_style4', 'friends') }} make new friends in classes I've taken. <br>
		{{ Form::radio('learning_style4', 'avoid') }} avoid people I don't know in classes I've taken.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '5. When working on a problem I') }} <br>
		{{ Form::radio('learning_style5', 'immediately') }} immediately start working on it. <br>
		{{ Form::radio('learning_style5', 'understand') }} try to understand it first.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '6. I tend to be more of a') }} <br>
		{{ Form::radio('learning_style6', 'realist') }} realist. <br>
		{{ Form::radio('learning_style6', 'dreamer') }} dreamer.
	</div>


	<div class="form-group">
		{{ Form::label('learning_style', '7. I would much rather learn things that') }} <br>
		{{ Form::radio('learning_style7', 'real') }} I can apply to real world problems. <br>
		{{ Form::radio('learning_style7', 'theories') }} are based off ideas and theories.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '8. I consider myself') }} <br>
		{{ Form::radio('learning_style8', 'careful') }} very careful. <br>
		{{ Form::radio('learning_style8', 'fast') }} a fast worker/problem solver.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '9. I find it') }} 
		<br>
		{{ Form::radio('learning_style9', 'easy') }} easy to memorize facts. <br>
		{{ Form::radio('learning_style9', 'difficult') }} difficult to memorize facts.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '10. I find it easier to learn') }} <br>
		{{ Form::radio('learning_style10', 'facts') }} facts.<br>
		{{ Form::radio('learning_style10', 'concepts') }} concepts.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '11. I find it more difficult to remember things when') }} <br>
		{{ Form::radio('learning_style11', 'pictures') }} observing diagrams and pictures.<br>
		{{ Form::radio('learning_style11', 'text') }} reading written text.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '12. I tend to remember information better by') }} <br>
		{{ Form::radio('learning_style12', 'outlining') }} outlining a section of a textbook in my own words.<br>
		{{ Form::radio('learning_style12', 'color') }} color coding my notes.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '13. I like teachers who spend a lot of time') }} <br>
		{{ Form::radio('learning_style13', 'explain') }} explaining things.<br>
		{{ Form::radio('learning_style13', 'drawing') }} drawing figures on the board.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '14. I prefer to get new information in') }} <br>
		{{ Form::radio('learning_style14', 'writtern') }} writtin or verbal information.<br>
		{{ Form::radio('learning_style14', 'graphs') }} pictures, graphs, and diagrams.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '15. When I meet someone new, I tend to remember what') }} <br>
		{{ Form::radio('learning_style15', 'conversation') }} conversation took place.<br>
		{{ Form::radio('learning_style15', 'look') }} they looked like.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '16. It is very _____ for me to explain how I arrived at the answer.') }} <br>
		{{ Form::radio('learning_style16', 'easy') }} easy<br>
		{{ Form::radio('learning_style16', 'hard') }} hard
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '17. I tend to work out a problem') }} <br>
		{{ Form::radio('learning_style17', 'steps') }} in consecutive steps, one step at a time.<br>
		{{ Form::radio('learning_style17', 'end') }} by jumping to the end result.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '18. When learning new material, I tend to') }} <br>
		{{ Form::radio('learning_style18', 'details') }} focus on the details and miss the big picture.<br>
		{{ Form::radio('learning_style18', 'understand') }} understand the big picture before explaining the details.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '19. When writing a paper, I tend to work on') }} <br>
		{{ Form::radio('learning_style19', 'order') }} it from start to finish in logical order.<br>
		{{ Form::radio('learning_style19', 'different') }} different parts no matter the order.
	</div>

	<div class="form-group">
		{{ Form::label('learning_style', '20. I prefer teachers who') }} <br>
		{{ Form::radio('learning_style20', 'one_topic') }} teach one topin in its entirety for each class period.<br>
		{{ Form::radio('learning_style20', 'jump') }} jump from topic to topic for each class period.
	</div>

{{ Form::close()}}





























































</div>

</body>
</html>