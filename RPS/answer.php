<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$random=(rand(0, 2));
$rrandom= array("rock","paper","scissors");
$computer=$rrandom[$random];
$answer=($_POST['RPS']);
echo "bot selected :".$computer ;
echo "<br>";
echo "you selected :".$answer;
echo "<br>";
?>
<h1><?php 
if($computer==$answer){
    echo "tie";
}
else{
    if($computer=="rock"){
        if($answer=="paper"){
           echo "you won";
        }
        elseif($answer=="scissors"){
            echo "you lost";
        }
    }
    if($computer=="paper"){
        if($answer=="scissors"){
           echo "you won";
        }
        elseif($answer=="rock"){
            echo "you lost";
        }
    }
    if($computer=="scissors"){
        if($answer=="rock"){
           echo "you won";
        }
        elseif($answer=="paper"){
            echo "you lost";
        }
    }
}
?></h1>
<form action="RPS.php">
    <input class="submit" type="submit" value="try again">
</form>
</body>
</html>
