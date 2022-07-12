<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        extract($_POST);
        echo var_dump($_POST);
    };

    
?>