<?php
	$files = scandir("data/projects");
	$title = array();
	$desc = array();
	$url = array();
	foreach ($files as $file) {
		if($file != "."){
			if($file != ".."){
				$content = file_get_contents("data/projects/" . $file);
				$json = json_decode($content,true);
				array_push($title, $json["title"]);
				array_push($desc, $json["desc"]);
				array_push($url, $json["url"]);
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<head>
		<title>KibbeWater - Projects</title>
	</head>

	<body>
		<div class="box">
			<h1 class="middletitle">Projects</h1>
				<?php
					for ($i=0; $i < count($title); $i++) { 
						echo "<div class=\"item\">";
						echo "<h1></h1>";
						echo "<h1 class=\"itemtext\">" . $title[$i] . "</h1>";
						echo "<h2 class=\"itemdesc\">" . $desc[$i] . "</h2>";
						echo "<h1></h1>";
						echo "<a href=" . $url[$i] . " class=\"itembutton\">View</a>";
						echo "<h1></h1>";
						echo "</div>";
					}
				?>
		</div>
	</body>
</html>