
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1</title>
    <link rel="stylesheet" href="../assets/css/lesson1.css">
</head>
<body>

</body>
</html>

<?php

echo '<div="container"><div class="flexcontainer">';
    for ($i=1; $i<11; $i++){
        echo '<div class="flexitem">';
        for ($j=1; $j<11; $j++) {
            echo "$i x $j = ".$i*$j."<br>";
        }
        echo '</div>';
    } 
echo '</div></div>';
?>