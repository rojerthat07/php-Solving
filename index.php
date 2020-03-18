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
    //Who likes it?
    //Problem Link - https://www.codewars.com/kata/5266876b8f4bf2da9b000362/train/php
    function likes( $names ) {

        define("text", "&nbsplikes this");
        $holder = "";

        if($names != null){
            for($i = 0; $i < count($names); $i++){
                if( count($names) == 1){
                    $holder .= $names[$i] . " " ."likes this" ;
                } else if(count($names) == 2){
                    $holder .= $names[$i] ;
                   if($i == 0){
                    $holder .= " and ";
                   }
                   if($i == 1){
                    $holder .= " like this";
                   }
                } else if(count($names) == 3){
                    $holder .= $names[$i];
                    if($i <= 0){
                        $holder .= ", ";
                    }
                    if($i == 1){
                        $holder .= " and ";
                    }
                    if($i == 2){
                        $holder .= " like this";
                       }
                } else if(count($names) >= 4){
                    $holder .= $names[$i];
                    if($i <= 0){
                        $holder .= ", ";
                    }
                    if($i == 1){
                        $holder .= " and ". (count($names) - 2). " others like this";
                    }
                    if($i == 1){
                    break;
                    }

                }
              
    
               }
        
        }else {
            $holder .= "no one likes this";
        }
   


     echo $holder;

       

    }
    


    likes([ 'Alex', 'Jacob', 'Max','Michenne']);
    
    ?>



</body>
</html>