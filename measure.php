<?php

if(isset($_POST["dovahkiin"]))
{
    $gender = $_POST["gender"];
    $gender1 = $_POST["gender1"];

    if($gender == $gender1)
    {
        echo "<script> alert('whey r u ghey?'); window.location.href = \"index.html\";</script>";
    }
    else
    {
        $name = $_POST["name"];
        $name1 = $_POST["name1"];
        $rand = rand(0, 100);
        
    }
}


?>