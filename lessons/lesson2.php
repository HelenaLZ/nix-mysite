
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2</title>
    <link rel="stylesheet" href="../assets/css/lesson2.css">
</head>
<body>
    
</body>
</html>

<?php

function addColor($number){
    $color = "#000";
    switch ($number){
        case 0: 
            $color = "#990033";
            return $color;
            break;
        
        case 1: 
            $color = "#FF0000";
            return $color;
            break;

        case 2: 
            $color = "#00CC00";
            return $color;
            break;
        
        case 3: 
            $color = "#FFFF00";
            return $color;
            break;

        case 4: 
            $color = "#0000FF";
            return $color;
            break;
        
        case 5: 
            $color = "#FF9900";
            return $color;
            break;

        case 6: 
            $color = "#FF00CC";
            return $color;
            break;
        
        case 7: 
            $color = "#9933CC";
            return $color;
            break;

        case 8: 
            $color = "#339999";
            return $color;
            break;
        
        case 9: 
            $color = "#999966";
            return $color;
            break;
    }
    
}


function addTagsAndStyle($number){
    $numberToString=(string)$number;
    if (mb_strlen($numberToString)==1){
        $color=addColor($number);
        $tag="<span style=\"color: $color;\">$number</span>";
        return $tag;
    } else {
        $tag="";
        for ($i=0; $i<mb_strlen($numberToString); $i++) {
            $color=addColor($numberToString[$i]);
            $tag=$tag."<span style=\"color: $color;\">$numberToString[$i]</span>";
        }
        return $tag;
    }
}


echo '<div class="container"><div class="flexcontainer">';

    for ($i=1; $i<11; $i++){
        echo '<div class="flexitem">';
            for ($j=1; $j<11; $j++) {
                echo addTagsAndStyle($i)." x ".addTagsAndStyle($j)." = ".addTagsAndStyle($i*$j)."<br>";
            }
        echo '</div>';
    } 

echo '</div></div>';
?>

