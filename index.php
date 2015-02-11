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
			<ul class="folder-wrap">
				<li class="folder-name"><i class="fa fa-folder-open-o"></i> Folder 1</li>
				<li class="file"><i class="fa fa-file-code-o"></i> File 1</li>
				<li class="file"><i class="fa fa-file-code-o"></i> File 2</li>
				<li class="file"><i class="fa fa-file-code-o"></i> File 3</li>
				<ul class="folder-wrap collapsable">
					<li class="folder-name"><i class="fa fa-folder-open-o"></i> Folder 2</li>
					<li class="file"><i class="fa fa-file-code-o"></i> File 1</li>
					<li class="file"><i class="fa fa-file-code-o"></i> File 2</li>
				</ul>
			</ul>
		</div>
		
		
		<script>
			$(".collapsible").click(function(){
				$(this + " .file").toggle();
			});
		</script>
	</body>
</html>
