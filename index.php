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


    function solution($str) {
        $holder = array();
        $twoLetter = '';

            for($i = 1; $i < strlen($str) + 1 ;$i++){
                //Check if it is even
                if(strlen($str) % 2 == 0){
                    //two sum up two strings
                   $twoLetter .= $str[$i -1 ];
                    //While $i is not equal to length 
                    if($i !==  strlen($str) + 1){
                        //To put comma if it is even to divide string into two
                        if(($i % 2) === 0 ){
                             array_push($holder, $twoLetter) ;
                             $twoLetter = "";
                         }
                    }
                }  
                    //If it is odd
                else{
                    //two sum up two strings
                     $twoLetter .= $str[$i -1 ];
                        if($i !==  strlen($str) ){
                        //To put comma if it is even to divide string into two
                        if(($i % 2) === 0 ){
                            array_push($holder, $twoLetter) ;
                            $twoLetter = "";
                         }
                    }
                    //Two push the last letter and To put _ in the end
                    if($i === strlen($str)){
                        array_push($holder, $twoLetter . '_') ;
                  }
                }
            }

      
            return $holder;
    
 
    ?>



</body>
</html>