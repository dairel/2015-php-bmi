<?php
require 'BMIService.class.php';

$weight = $_GET['weight'];
$height = $_GET['height'];
$bmiIndex = 0.0;


if(is_double($weight) && is_double($height)){
    
    $bmiIndex = BMIService::getIndex($weight, $height);
    
    
}


echo $bmiIndex;
?>