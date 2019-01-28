<?php
include("./listan.php");
include("./description.php");


sort($myFavLan, SORT_NUMERIC);



function sortTheList(){
    foreach($GLOBALS['myFavLan'] as $key=>$value){

        echo $value . " ";
    };
}




function getValues(){
    if(isset($_POST['submit'])){

        $option = $_POST['event'];
        foreach($GLOBALS['languagesDescription'] as $key=>$value){
            if( $option == $key){

                echo $value;
            }
        };
    }
}



?>