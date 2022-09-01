<?php
     // counts visits and stores in text file
    $count_page = ('C:\xampp\htdocs\aqm\resources\views\hitcount.txt');
    $hits = file($count_page);
    $hits[0] ++;
     
    $fp = fopen($count_page , "w");
    fputs($fp , "$hits[0]");
    fclose($fp);
    //echo $hits[0];
     
    ?>