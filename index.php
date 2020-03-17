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
    //This time no story, no theory. The examples below show you how to write function accum:
    //Problem Link - https://www.codewars.com/kata/5667e8f4e3f572a8f2000039/train/php
    function accum($s) {
        $finalOutput = "";
    
    
        for($i = 0; $i != strlen($s);$i++,$j++){
            for($j = 0 ;$j <= $i;$j++){
                if($j > 0){
                    $finalOutput .= strtolower($s[$i]) ;
                } else {
                    $finalOutput .= strtoupper($s[$i]);
                }
            }
            if($i != strlen($s) -1){
                $finalOutput .= "-";
            } 
        }
      
       return $finalOutput;
    }


  accum('EvidjUnokmM');
    
    
    ?>



</body>
</html>