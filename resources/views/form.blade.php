<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>File upload Form</h2>
	{!! Form::open(['url'=>'/file', 'files'=>true]) !!}
		{!! Form::file('file') !!}
		{!! Form::submit('upload')!!}	
	{!! Form::close() !!}
</body>
</html>