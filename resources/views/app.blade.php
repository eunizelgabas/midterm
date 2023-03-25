<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Midterm Project</title>
		@vite
	</head>
	<body class="background">
		@inertia
	</body>
</html>

<style>
    .background{
        background-image: url('/asset/bgg.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
    }
</style>
