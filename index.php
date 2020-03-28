<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Problem Solving</title>
    <link rel="icon" href="images/php-logo.png">
</head>
<body>
    <?php
    //Split Strings
    //Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').
    //Problem Link - https://www.codewars.com/kata/515de9ae9dcfc28eb6000001/train/php


 
    function reverseWords($str) {

        $output = "";
        $revWord = [];
        $holder = "";


        for($i= 0 ;$i<strlen($str);$i++){
            $holder .= $str[$i];
            if(($str[$i] == " " || $i == strlen($str) -1)){
                array_push($revWord,$holder);
                $holder ="";
            }
        }

        for($i =  count($revWord) -1; $i>=0 ;$i--){
            $output .= $revWord[$i];
        }



            echo strrev($output);
    
      }

      reverseWords("double  spaces")
 
    ?>



</body>
</html>