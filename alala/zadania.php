<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . " "; 
}
$okej = 0;
for ($i = 2; $i <= 20; $i++) {
    if($i%2 ==0 ){
        $okej +=1;
        echo "$okej";
    }
    echo $i . " ";
}
$imiona = ["jan","michał","tomek"];
foreach ($imiona as $imie){
    echo $imie . "\n";
}
echo "XD";