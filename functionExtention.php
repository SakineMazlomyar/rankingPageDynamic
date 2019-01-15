<?php
include("./listan.php");
include("./description.php");


sort($myFavLan);



function sortTheList(){
    foreach($GLOBALS['myFavLan'] as $key=>$value){

        echo $value . " ";
    };
}


function getAllKeys(){
    foreach($GLOBALS['languagesDescription'] as $key=>$value){

        echo
        "<li id='dropDown'>"."<a href='details.php'>". $key ."</a>"."</li>";
    }
}

function getValues(){
    $array = array();
    foreach($GLOBALS['languagesDescription'] as $key=>$value){
        array_push($array, $key);

    }

   /*  foreach($array as $value){
        if($value == $GLOBALS['languagesDescription']=>[$key])
        echo $GLOBALS['languagesDescription'][$value];
        return;
    } */
}



?>