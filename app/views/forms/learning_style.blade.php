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
		{{ Form::label('question1', '1. I learn something better when I') }} <br>
		{{ Form::radio('active_question1', '1') }} try it out. <br>
		{{ Form::radio('reflective_question1', '-1') }} think it through.
	</div>

	<div class="form-group">
		{{ Form::label('question2', '2. It is easy for me to remember things when' ) }} <br>
		{{ Form::radio('active_question2', '1' ) }} discuss it with someone else. 
		<br>
		{{ Form::radio('reflective_question2', '-1') }} think to myself.
	</div>

	<div class="form-group">
		{{ Form::label('question3', '3. I learn better when I') }} <br>
		{{ Form::radio('active_question3', '1') }} work in groups. <br>
		{{ Form::radio('reflective_question3', '-1') }} work individually.
	</div>

	<div class="form-group">
		{{ Form::label('question4', '4. I tend to') }} <br>
		{{ Form::radio('active_question4', '1') }} make new friends in classes I've taken. <br>
		{{ Form::radio('reflective_question4', '-1') }} avoid people I don't know in classes I've taken.
	</div>

	<div class="form-group">
		{{ Form::label('question5', '5. When working on a problem I') }} <br>
		{{ Form::radio('active_question5', '1') }} immediately start working on it. <br>
		{{ Form::radio('reflective_question5', '-1') }} try to understand it first.
	</div>

	<div class="form-group">
		{{ Form::label('question6', '6. I tend to be more of a') }} <br>
		{{ Form::radio('sensing_question6', '1') }} realist. <br>
		{{ Form::radio('intuitive_question6', '-1') }} dreamer.
	</div>


	<div class="form-group">
		{{ Form::label('question7', '7. I would much rather learn things that') }} <br>
		{{ Form::radio('sensing_question7', '1') }} I can apply to real world problems. <br>
		{{ Form::radio('intuitive_question7', '-1') }} are based off ideas and theories.
	</div>

	<div class="form-group">
		{{ Form::label('question8', '8. I consider myself') }} <br>
		{{ Form::radio('sensing_question8', '1') }} very careful. <br>
		{{ Form::radio('intuitive_question8', '-1') }} a fast worker/problem solver.
	</div>

	<div class="form-group">
		{{ Form::label('question9', '9. I find it') }} 
		<br>
		{{ Form::radio('sensing_question9', '1') }} easy to memorize facts. <br>
		{{ Form::radio('intuitive_question9', '-1') }} difficult to memorize facts.
	</div>

	<div class="form-group">
		{{ Form::label('questio10', '10. I find it easier to learn') }} <br>
		{{ Form::radio('sensing_question10', '1') }} facts.<br>
		{{ Form::radio('intuitive_question10', '-1') }} concepts.
	</div>

	<div class="form-group">
		{{ Form::label('question11', '11. I find it more difficult to remember things when') }} <br>
		{{ Form::radio('verbal_question11', '1') }} observing diagrams and pictures.<br>
		{{ Form::radio('visual_question11', '-1') }} reading written text.
	</div>

	<div class="form-group">
		{{ Form::label('question12', '12. I tend to remember information better by') }} <br>
		{{ Form::radio('verbal_question12', '1') }} outlining a section of a textbook in my own words.<br>
		{{ Form::radio('visual_question12', '-1') }} color coding my notes.
	</div>

	<div class="form-group">
		{{ Form::label('question13', '13. I like teachers who spend a lot of time') }} <br>
		{{ Form::radio('verbal_question13', '1') }} explaining things.<br>
		{{ Form::radio('visual_question13', '-1') }} drawing figures on the board.
	</div>

	<div class="form-group">
		{{ Form::label('question14', '14. I prefer to get new information in') }} <br>
		{{ Form::radio('verbal_question14', '1') }} writtin or verbal information.<br>
		{{ Form::radio('visual_quesition14', '-1') }} pictures, graphs, and diagrams.
	</div>

	<div class="form-group">
		{{ Form::label('question15', '15. When I meet someone new, I tend to remember what') }} <br>
		{{ Form::radio('verbal_question15', '1') }} conversation took place.<br>
		{{ Form::radio('visual_question15', '-1') }} they looked like.
	</div>

	<div class="form-group">
		{{ Form::label('question16', '16. It is very _____ for me to explain how I arrived at the answer.') }} <br>
		{{ Form::radio('sequential_question16', '1') }} easy<br>
		{{ Form::radio('global_question16', '-1') }} hard
	</div>

	<div class="form-group">
		{{ Form::label('question17', '17. I tend to work out a problem') }} <br>
		{{ Form::radio('sequential_question17', '1') }} in consecutive steps, one step at a time.<br>
		{{ Form::radio('global_question17', '-1') }} by jumping to the end result.
	</div>

	<div class="form-group">
		{{ Form::label('question18', '18. When learning new material, I tend to') }} <br>
		{{ Form::radio('sequential_question18', '1') }} focus on the details and miss the big picture.<br>
		{{ Form::radio('global_question18', '-1') }} understand the big picture before explaining the details.
	</div>

	<div class="form-group">
		{{ Form::label('question19', '19. When writing a paper, I tend to work on') }} <br>
		{{ Form::radio('sequential_question19', '1') }} it from start to finish in logical order.<br>
		{{ Form::radio('global_question19', '-1') }} different parts no matter the order.
	</div>

	<div class="form-group">
		{{ Form::label('question20', '20. I prefer teachers who') }} <br>
		{{ Form::radio('sequential_question20', '1') }} teach one topin in its entirety for each class period.<br>
		{{ Form::radio('global_question20', '-1') }} jump from topic to topic for each class period.
	</div>

{{ Form::close()}}

</div>

</body>
</html>