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