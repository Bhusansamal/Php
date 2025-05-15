<?php
    function printResult($name, $sub1, $sub2, $sub3, $sub4){
        $total = $sub1 + $sub2 + $sub3 + $sub4;
        echo "Name of the user : $name, Total Marks : $total";
    }

    printResult("Bhusan", 100, 100, 100, 100);
?>
