<?php

function myCount()
{
    $count = 10;
    while($count < 100)
    {
//        echo "Count is " . $count . nl2br() ;
        echo nl2br("Count is " . $count . "\n") ;
        $count++;
    }
}

myCount();
?>