<?php

function sayhello($name){
    return "Cześć, $name";
}
echo sayhello('Szymon');
function multiply($a, $b){
    return $a * $b;
}
echo multiply(5,3);
function isEven($n){
    return $n % 2 == 0;

}
echo isEven(4);
function formatprice($price){
    return number_format($price,2);
}
echo formatprice(12.2);
function greetUser($nam,$age){
    return "Cześć, $nam masz $age lat";
}
echo greetUser('Maciek',12);