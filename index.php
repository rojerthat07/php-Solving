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
    //Detect Pangram
   
    //Problem Link -https://www.codewars.com/kata/545cedaa9943f7fe7b000048/train/php
    function detect_pangram($string) { 
        $alphabet = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
        $numberOfAlphabet = count($alphabet);
        $numberOfChecks = 0;
        $checker = false;
        $newString = "";

        for($i =0 ;$i < strlen($string);$i++){
            $numberOfAlphabet = count($alphabet);
            for($j=0;$j < $numberOfAlphabet;$j++){
                if( strtolower($string[$i]) == strtolower($alphabet[$j])){
                    $numberOfChecks++;
                    array_splice($alphabet,$j,1);
                    break;
                }
            }
        }
     
        return ($numberOfChecks >= 26 ? true : false);

        }

        detect_pangram("The quick brown fox jumps over the lazy dog.") ;
 
    ?>



</body>
</html>