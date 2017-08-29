<?php  
$length = $_POST['length'];
$width = 0.5 + $_POST['width'];

$inside = $_POST['inside'];
$outisde = $_POST['outside'];
$plastic = $_POST['plastic'];
$upptagning = $_POST['upptagning'];
$motorer = $_POST['motorer'];
	$antal = $_POST['antal'];
$sept = $_POST['sept'];
$batterier = $_POST['batterier'];
$water = $_POST['vatten'];
$wash = $_POST['wash'];


function pris($length, $width, $inside, $outisde, $plastic, $upptagning, $motorer, $antal, $sept, $water, $wash, $batterier ) {

$kvadrat = $length * $width;
if (isset($inside)) {
	$inside = 700 * $kvadrat;
}

if (isset($outisde)) {
	$outside = 300 * $kvadrat;
}

if (isset($plastic)) {
	$plastic = 250 * $kvadrat;
}
if (isset($upptagning)) {
	$upptagning = 150 * $kvadrat;
}


if (isset($motorer)) {
	if($antal == 1) {
	$motorer = 1395;
	}
	elseif($antal == 2) {
		$motorer = 2790 ;
	}
	elseif($antal == 3) {
		$motorer = 4185 ;
	}
}

if (isset($sept)) {
	$sept = 25 * $kvadrat;
}

if (isset($batterier)) {
	$batterier = 25 * $kvadrat;
}

if (isset($water)) {
	$water = 25 * $kvadrat;
}


if (isset($wash)) {
	$wash = 40 * $kvadrat;
}

return  1000 + $inside + $outside + $plastic +$upptagning + $motorer + $sept + $water + $wash + $batterier;





}

echo pris($length, $width, $inside, $outisde, $plastic, $upptagning, $motorer, $antal, $sept, $water, $wash, $batterier);




?>