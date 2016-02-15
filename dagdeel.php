<?php

$day = date ('H');
$tekst = "tekst";

		if ($day >= 6 && $day < 12 ) {
		$tekst =  "Goede morgen!";
		$style = "morning";
}
	elseif ($day >= 12 && $day < 18 ) {
		$tekst =  "Goede Middag!";
		$style = "afternoon";
}
	elseif ($day >= 18 && $day < 24  ){
		$tekst =  "Goede Avond!";
		$style = "evening";
}
	elseif ($day >= 0 && $day < 6 ){
		$tekst = "Goede Nacht!";
		$style = "night";
}
	
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $tekst;?></title>
	<link  href="./css/style.css" rel="stylesheet">
</head>
<body class="<?php echo $style; ?>">


<?php
				
		echo "<p class=\"day\">$tekst</p>";
		echo "<p class=\"tijd\">Het is nu " .date("H:i</p>");
?>

</body>
</html>