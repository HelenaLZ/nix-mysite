<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userText=htmlspecialchars($_POST['userText']);  
    if ($userText === "") {
        exit("You've forgotten to enter text");
    } else {
        echo strrev($userText);
    }
}

     // Validation of field

     
   
?>