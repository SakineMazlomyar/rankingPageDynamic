<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php
define("Ranking","Ranking Website!");
echo Ranking;
?></title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<header>
    <ul>
        <li>
            <h2>
            <?php
    define("pageTitle", "Welcome To RankingLanguage Website!");
    $pageTitle = pageTitle; 
    if(isset($pageTitle)){
        echo $pageTitle;
    }
        ?> 
        </h2>
    </li>
        <li> <a href="../kontakt.php">kontakt sidan</a></li>
        <li> <a href="../index.php">Index sidan</a></li>
        <li> <a href="../listanSidan.php">Listan sidan</a></li>
        <li> <a href="../descriptionCode.php">Go to dropDown</a></li>
        <li> <a href="./multiArraydata/data.php">Go to assosiative arrays</a></li>    
    </ul>
</header>



<div style="position: relative; top: 4em;">
<?php
    $arries = array(
        array("mobile"=>"It depends. But example java uses for android devices"),
        array("machine"=>"Python is a good choice even c#"),
        array("website"=>"Python, php and many others are good choices"),
        array("game"=>"Python, c++ and c# are good choices")


    );
    foreach( $arries as $key=>$value){
        foreach($value as $key=>$value){
            print_r("<li>". $key. ": ".$value."</li>");
        }
    }
?>


</div>


<?php include("../footer.php");?>
</body>
</html>