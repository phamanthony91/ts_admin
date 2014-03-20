<!DOCTYPE html>
<html>
<head>
	<title>TutorScout Admin</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>

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
		{{ Form::label('question', '1. I learn something better when I') }} <br>
		{{ Form::radio('answer1', '1') }} try it out. <br>
		{{ Form::radio('answer1', '2') }} think it through.
	</div>

	<div class="form-group">
		{{ Form::label('question', '2. It is easy for me to remember things when' ) }} <br>
		{{ Form::radio('answer2', '3' ) }} discuss it with someone else. 
		<br>
		{{ Form::radio('answer2', '4') }} think to myself.
	</div>

	<div class="form-group">
		{{ Form::label('question', '3. I learn better when I') }} <br>
		{{ Form::radio('answer3', '5') }} work in groups. <br>
		{{ Form::radio('answer3', '6') }} work individually.
	</div>

	<div class="form-group">
		{{ Form::label('question', '4. I tend to') }} <br>
		{{ Form::radio('answer4', '7') }} make new friends in classes I've taken. <br>
		{{ Form::radio('answer4', '8') }} avoid people I don't know in classes I've taken.
	</div>

	<div class="form-group">
		{{ Form::label('question', '5. When working on a problem I') }} <br>
		{{ Form::radio('answer5', '9') }} immediately start working on it. <br>
		{{ Form::radio('answer5', '10') }} try to understand it first.
	</div>

	<div class="form-group">
		{{ Form::label('question', '6. I tend to be more of a') }} <br>
		{{ Form::radio('answer6', '11') }} realist. <br>
		{{ Form::radio('answer6', '12') }} dreamer.
	</div>


	<div class="form-group">
		{{ Form::label('question', '7. I would much rather learn things that') }} <br>
		{{ Form::radio('answer7', '13') }} I can apply to real world problems. <br>
		{{ Form::radio('answer7', '14') }} are based off ideas and theories.
	</div>

	<div class="form-group">
		{{ Form::label('question', '8. I consider myself') }} <br>
		{{ Form::radio('answer8', '15') }} very careful. <br>
		{{ Form::radio('answer8', '16') }} a fast worker/problem solver.
	</div>

	<div class="form-group">
		{{ Form::label('question', '9. I find it') }} 
		<br>
		{{ Form::radio('answer9', '17') }} easy to memorize facts. <br>
		{{ Form::radio('answer9', '18') }} difficult to memorize facts.
	</div>

	<div class="form-group">
		{{ Form::label('question', '10. I find it easier to learn') }} <br>
		{{ Form::radio('answer10', '19') }} facts.<br>
		{{ Form::radio('answer10', '20') }} concepts.
	</div>

	<div class="form-group">
		{{ Form::label('question', '11. I find it more difficult to remember things when') }} <br>
		{{ Form::radio('answer11', '21') }} observing diagrams and pictures.<br>
		{{ Form::radio('answer11', '22') }} reading written text.
	</div>

	<div class="form-group">
		{{ Form::label('question', '12. I tend to remember information better by') }} <br>
		{{ Form::radio('answer12', '23') }} outlining a section of a textbook in my own words.<br>
		{{ Form::radio('answer12', '24') }} color coding my notes.
	</div>

	<div class="form-group">
		{{ Form::label('question', '13. I like teachers who spend a lot of time') }} <br>
		{{ Form::radio('answer13', '25') }} explaining things.<br>
		{{ Form::radio('answer13', '26') }} drawing figures on the board.
	</div>

	<div class="form-group">
		{{ Form::label('question', '14. I prefer to get new information in') }} <br>
		{{ Form::radio('answer14', '27') }} writtin or verbal information.<br>
		{{ Form::radio('answer14', '28') }} pictures, graphs, and diagrams.
	</div>

	<div class="form-group">
		{{ Form::label('question', '15. When I meet someone new, I tend to remember what') }} <br>
		{{ Form::radio('answer15', '29') }} conversation took place.<br>
		{{ Form::radio('answer15', '30') }} they looked like.
	</div>

	<div class="form-group">
		{{ Form::label('question', '16. It is very _____ for me to explain how I arrived at the answer.') }} <br>
		{{ Form::radio('answer16', '31') }} easy<br>
		{{ Form::radio('answer16', '32') }} hard
	</div>

	<div class="form-group">
		{{ Form::label('question', '17. I tend to work out a problem') }} <br>
		{{ Form::radio('answer17', '33') }} in consecutive steps, one step at a time.<br>
		{{ Form::radio('answer17', '34') }} by jumping to the end result.
	</div>

	<div class="form-group">
		{{ Form::label('question', '18. When learning new material, I tend to') }} <br>
		{{ Form::radio('answer18', '35') }} focus on the details and miss the big picture.<br>
		{{ Form::radio('answer18', '36') }} understand the big picture before explaining the details.
	</div>

	<div class="form-group">
		{{ Form::label('question', '19. When writing a paper, I tend to work on') }} <br>
		{{ Form::radio('answer19', '37') }} it from start to finish in logical order.<br>
		{{ Form::radio('answer19', '38') }} different parts no matter the order.
	</div>

	<div class="form-group">
		{{ Form::label('question', '20. I prefer teachers who') }} <br>
		{{ Form::radio('answer20', '39') }} teach one topin in its entirety for each class period.<br>
		{{ Form::radio('answer20', '40') }} jump from topic to topic for each class period.
	</div>

{{ Form::close()}}

</div>

</body>
</html>