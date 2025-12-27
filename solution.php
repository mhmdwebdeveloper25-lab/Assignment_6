<?php
    $name = "Mohammad Sleiman"; //string
    $age = 20;  //integer
    $height = 182.00;   //float
    $is_student = true; //boolean
    $prog_languages = [0 => "Javascript", 1 => "PHP", 2 => "Java"]; //array
    
    //for printing: get values true/false instead of 0/1
    if ($is_student)
        $result = "true";
    else
        $result = "false";

    //print statement with .
    echo "\"My name is ".$name.", I am ".$age." years old, my height is ".$height." 'cm', it is ".$result." that I am a student, and my favorite \\programming languages\\ are ".$prog_languages[0]." and ".$prog_languages[1]." and ".$prog_languages[2].".\"";
    
    //break row
    echo "<br>";

    //another print statement with {}
    echo "\"My name is {$name}, I am {$age} years old, my height is {$height} 'cm', it is {$result} that I am a student, and my favorite \\programming languages\\ are {$prog_languages[0]} and {$prog_languages[1]} and {$prog_languages[2]}.\"";
?>