<?php

    $str = 'This is some text. I will be using PHP string functions to change it';
    $str_lower = strtolower($str );
    $str_camel = ucwords($str );
    $str_first = lcfirst($str );
    $str_replace = str_ireplace("PHP", "HTML", $str);
    $str_reverse = strrev($str );
    $str_up = strtoupper($str );
    $str_shuffle = str_shuffle($str );
    $str_count = str_word_count($str );
    $str_char = strlen($str );
    $str_position = strpos($str, "PHP");
    $str_rep = str_repeat($str, 2);

    echo '<br> output <br>';
    echo '<p>' . $str_lower . '</p>';
    echo  '<p>' . $str_camel . '</p>';
    echo '<p>' . $str_first . '</p>';
    echo '<p>' . $str_replace . '</p>';
    echo '<p>' . $str_reverse . '</p>';
    echo '<p>' . $str_up . '</p>';
    echo '<p>' . $str_shuffle . '</p>';
    echo "The number of words in the string:";
    echo '<p>' . $str_count . '</p>';
    echo "The number of characters in the string:";
    echo '<p>' . $str_char . '</p>';
    echo "The word PHP start in position:";
    echo '<p>' . $str_position . '</p>';
    echo '<p>' . $str_rep . '</p>';