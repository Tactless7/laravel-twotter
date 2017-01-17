<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Twotter pleine pagee</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 class="display-3">Voila le Twot demandé</h1>
		</div>
		<div class="row card text-center mt-3">
			<div class="card-block">
				<h2 class="card-title">{{$twoot->text}}</h2> <!-- A débuggeeeeer
 -->
				<form action="{{ url("/twoots/$twoot->id") }}" method="POST">
                	<button class="btn btn-danger">Supprimer</button>
                        {{ method_field('DELETE') }}
                </form>
			</div>
			<div class="card-footer text-muted">
				{{$twoot->created_at->diffForHumans()}}
			</div>
		</div>
	</div>
	
</body>
</html>