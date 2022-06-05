<?php 

	function packages(string $url)
	{
		$project = file_get_contents($url);
		$json = json_decode($project);

		return $json->require;
	}

	$project1 = packages('https://raw.githubusercontent.com/jcarrizalez/ampliffy_project1/master/composer.json');
	$project2 = packages('https://raw.githubusercontent.com/jcarrizalez/ampliffy_project2/master/composer.json');

	print_r($project1);
	print_r($project2);
?>