<!DOCTYPE html>
<html>
	<head>
		<!--jQuery-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<!--Fonts-->
		<link href='http://fonts.googleapis.com/css?family=Roboto:900,900italic,500,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>
		<!--Font Awesome-->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<!--Styling-->
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="filemap">
			<div class="filemap-description">This is a directory description</div>
			<ul class="folder-wrap collapsible">
				<li class="folder-name">Folder 1</li>
				<li class="file">File 1</li>
				<li class="file">File 2<span>a short description</span></li>
				<li class="file">File 3</li>
				<ul class="folder-wrap collapsible">
					<li class="folder-name">Folder 2</li>
					<li class="file">File 1</li>
					<li class="file">File 2</li>
				</ul>
			</ul>
			<ul class="folder-wrap collapsible">
				<li class="folder-name">Folder 3</li>
				<li class="file">File 1</li>
				<li class="file">File 2</li>
			</ul>
		</div>
		
		
		<script type="text/javascript" src="collapsible.js"></script>
	</body>
</html>
