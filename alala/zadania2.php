<?php
$colors = ["zielony","niebieski","czarny","czerwony"];
echo $colors[0];
$product = array(
    "name" => "laptop",
    "price" => "3000",
    "stock" => "true"
);
$numbers = [1, 2, 3];
array_push($numbers, 4);
print_r($numbers);
$owoce = ["banan","gruszka","śliwka","granat"];
if (in_array('banan', $owoce)) {
    echo "Jest banan";
}
$users = [
    'name' => 'jan',
    'age' => '22'
];
print_r(array_keys($users));