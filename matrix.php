<?php
    $m1 = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9),
    );
    $m2 = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9),
    );
    //print the first matrix
    for($i = 0; $i<3; $i++){
        for($j = 0; $j<3; $j++){
            echo $m1[$i][$j];
        }
        echo "<br>";
    }
    echo "&nbsp;+&nbsp;<br>";
    //print the second matrix
    for($i = 0; $i<3; $i++){
        for($j = 0; $j<3; $j++){
            echo $m2[$i][$j];
        }
        echo "<br>";
    }
    echo "&nbsp;=&nbsp;<br>";
    //print the second matrix
    for($i = 0; $i<3; $i++){
        for($j = 0; $j<3; $j++){
            echo ($m1[$i][$j] + $m2[$i][$j]);
        }
        echo "<br>";
    }
?>