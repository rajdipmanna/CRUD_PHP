<?php

$food = array("banana","apple","pizza","aloo"); // indexed array

foreach($food as $x){
    echo $x."<br>";
}

$age=[
                                //associated array
    "Bill"=>23,
     "Roy"=>20,
     "Dip"=>21
    ];
    foreach($age as $key=>$value){

        echo $key. "=".$value."<br>";

    }

?>
