<?php
$input = ($argv[1]);

$euroArray = array(50, 20, 10, 5, 2, 1);
$centenArray = array(50, 20, 10, 5);


$geld = intval($input);
$cent = $input - $geld;
$cent = intval(round($cent * 100));
$cent = round($cent / 5) * 5;

foreach ($euroArray as $value) {
    $restgeld = floor($geld / $value);
    if ($restgeld >= 1) {
        $geld = $geld - ($value * $restgeld);
        echo $restgeld . " x " . $value . " euro" . PHP_EOL;
    }
}

foreach ($centenArray as $value) {
    $restcent = floor($cent / $value);
    if ($restcent >= 1) {
        $cent = $cent - ($value * $restcent);
        echo $restcent . " x " . $value . " cent" . PHP_EOL;
    }
}