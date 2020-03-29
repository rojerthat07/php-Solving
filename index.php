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
    //Mexican Wave
    //	In this simple Kata your task is to create a function that turns a string into a Mexican Wave. You will be passed a string and you must return that string in an array where an uppercase letter is a person standing up.
    //Problem Link -https://www.codewars.com/kata/58f5c63f1e26ecda7e000029/train/php

    function wave($people){

        $holder = "";
        $final = "";
        $output = [];
    

        for($i =0;$i<strlen($people) ;$i++){
            $holder = "";
            $holder .= strtoupper($people[$i]);

            if($people[$i] == " " ){
                continue;
            }else{
                for($j = 0;$j<strlen($people) ;$j++){
                    if($j != $i){
                        $final .= $people[$j];
                    }else{
                        $final .= $holder;
                    }
                    
                }
            }
           
          
           array_push($output, $final);
           $final = "";
           
        }
        if($people == null){
             $output = [];
        }


    
       return $output;
      }



    wave("hello  ") ;
 
    ?>



</body>
</html>