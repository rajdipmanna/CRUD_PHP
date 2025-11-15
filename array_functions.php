<?php

//count() & sizeof()

$food=array('orange','banana','apple','grapes');

echo "<h1>".sizeof($food)."</h1>";
echo "<h1>".count($food)."</h1>";

$length=count($food);
for($i=0 ; $i<4 ; $i++){
    echo $food[$i]."<br>";
}

$foo=array(
    "fruits"=>array('orange','apple'),
    "veggie"=>array('carrot','pea')
);

echo "<h1>".count($foo,1)."</h1>";
echo "<h1>".count($foo["fruits"],1)."</h1>";
?>

