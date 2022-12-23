<?php
require_once('lib/rest.php');
require_once('lib/Alpha.php');

header("Content-type:application/json");
$jsdata=json_decode(file_get_contents('php://input'),true);
$inputValue1=$jsdata['inputValue1']??"";
$inputUnit1=$jsdata['inputUnit1']??"";
$inputValue2=$jsdata['inputValue2']??"";
$inputUnit2=$jsdata['inputUnit2']??"";
$inputUnitTotal=$jsdata['inputUnitTotal']??"";

$rest = new rest();
$alpha = new Alpha();
$response = $alpha->calculate($inputValue1, $inputUnit1, $inputValue2, $inputUnit2, $inputUnitTotal);

$rest->output($response);
