<?php 
$gewicht = $_GET["gewicht"];
$lengte = $_GET["lengte_cm"];
BMIcalc($gewicht, $lengte);

function BMIcalc($gewicht, $lengte) {
	
	$BMI = round($gewicht / ($lengte / 100 * $lengte / 100), 1);

	echo '<p>Uw BMI is: ' . $BMI . '</p>';

	switch (true) {
		case ($BMI < 18.5):
			echo '<div style="background-color:#508193"><p style="color: #ADD9D2">U heeft onder gewicht, pas op dat u niet weg waait</p></div>';
			break;
		case ($BMI < 24.9):
			echo '<div style="background-color:#afe56f"><p style="color: white">U heeft een normaal gewicht</p></div>';
			break;
		case ($BMI < 29.9):
			echo '<div style="background-color:#fefdb0"><p style="color: #9c7b29">U heeft over gewicht</p></div>';
			break;
		case ($BMI < 34.9):
			echo '<div style="background-color:#f9da4a"><p style="color: #FCDB01">U heeft obesitas klasse 1</p></div>';
			break;
		case ($BMI < 39.9):
			echo '<div style="background-color:#e89248"><p style="color: #924d1d">U heeft obesitas klasse 2</p></div>';
			break;
		case ($BMI < 40):
			echo '<div style="background-color:#e17f85"><p style="color: #8d3b39">U heeft obesitas klasse 3</p></div>';
			break;
		case ($BMI > 40):
			echo '<div style="background-color:#e17f85"><p style="color: #8d3b39;">U bent ontiegelijk dik! Neem contact op met een begrafenisondernemer</p></div>';
			break;
	}
}

?>