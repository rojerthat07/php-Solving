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


    function duplicateCount($text) {

            $count = 0;
            $holder = "";
            $duplicate = $text;
            $i = 0;
        while($i < strlen($text)) {
            
        
        if($text[$i] === $duplicate[$i]){
            $holder .= $text[$i];
            $count++;
        }
            $i++;
        }

      echo $holder;
      echo $count;
      
      }


      duplicateCount("jer carlo catallo");
       

    
    
 
    ?>



</body>
</html>