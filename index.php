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
    //Exes and Ohs
    //Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive. The string can contain any char.
    //Problem Link -https://www.codewars.com/kata/55908aad6620c066bc00002a/train/php

    function XO($s) {
        $xcount = 0;
        $ocount = 0;
        $bool = false;
    
        for($i =0; $i <strlen($s);$i++){
            for($j=0;$j<strlen($s);$j++){
                if(($s[$i] && (strtolower($s[$i]) == 'x' || strtolower($s[$i]) == 'o')) == $s[$j]){
                    if(strtolower($s[$i]) == 'x'){
                        $xcount++;
                    }
                    if(strtolower($s[$i]) == 'o'){
                        $ocount++;
                    }
                }
            }
        }
  
        if($xcount === $ocount ){
            $bool = true;
        } 
        
        echo ($bool ? 'true' : 'false');

      }


      XO('')
 
    ?>



</body>
</html>