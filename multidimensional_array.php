<?php

    $emp=[
        [1,"Krish","Manager",5000],
        [2,"salman","Salesman",2000],
        [3,"Mohan","Driver",300]
    ];
    echo $emp[0][1];

    echo "<pre>";
    print_r($emp);
    echo "</pre>";

    foreach($emp as $v1){
        foreach($v1 as $v2){
            echo $v2." ";
        }
        echo"<br>";
    }

    //multidimensional assciated array

    $marks=[
        "krish"=>[
            "phy"=>85,
            "chem"=>90
            ],

        "akash"=>[
            "phy"=>80,
            "chem"=>93
            ],

        "bilal"=>[
            "phy"=>88,
            "chem"=>92
            ]
        ];
    foreach($marks as $key=>$value){
        // echo $key;
        foreach($value as $v){
            echo $v." ";
        }
        echo "<br>";
    }

    //foreach with list

    $emp1=[
        [1,"A","M",200],
        [2,"B","PM",200],
        [3,"C","TE",200],
        [4,"D","FD",200]
    ];
    foreach($emp1 as list($id,$name,$designation,$salary)){

        echo "$id $name $designation $salary"."<br>";
    }
    ?>