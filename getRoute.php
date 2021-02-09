<?php



$base = "C:/xampp/htdocs/www/badapple";

$xPos = $_GET["x"];
$yPos = $_GET["y"];

// number of frame in the video 
$nbImg = 4383;

for($i = 0; $i < $nbImg; $i++) {
	
	// get color info on a specific time
	$image = imagecreatefrompng($base . "/pngs/png" . $i + 1 . ".png");
	$rgb = imagecolorat($image, $xPos , $yPos);

	// turn it into rgb
	$r = ($rgb >> 16) & 0xFF;
	$g = ($rgb >> 8) & 0xFF;
	$b = $rgb & 0xFF;

	// and finaly in luminance value
	// if it's possible to go from imagecolorat() to lum directly it would be faster!
	$lum = 0.2126 * $r + 0.7152 * $g + 0.0722 * $b;


	// 0 black
	// 1 gray
	// 2 white
	if($lum < 85) {
		echo(0);
	} elseif ($lum > 85 && $lum < 170) {
		echo(1);
	} else {
		echo(2);
	}
}



?>
