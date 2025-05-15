<?php
    function printResult($name, $sub1, $sub2, $sub3, $sub4){
        $total = $sub1 + $sub2 + $sub3 + $sub4;
        $percentage = ($total / 400) * 100;
        if( $sub1 >= 33 && $sub2 >= 33 && $sub3 >= 33 && $sub4 >= 33 && $percentage >= 40){
            echo "Name of the user : $name, Total Marks : $total, Percentage : $percentage";
        }
        else {
            echo "Student Did not passed";
        }
    }

    printResult("Bhusan", 50, 100, 100, 100);
?>
