<?php
include("./listan.php");



sort($myFavLan);



function sortTheList(){
    foreach($GLOBALS['myFavLan'] as $key=>$value){

        echo $value . " ";
    };
}

sortTheList()


?>