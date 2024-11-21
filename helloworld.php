<?php

function sayHello(): void{
    $welcome = array("Hello","World!","this", "is","test","programme");
    //echo "Hello World";

    foreach ($welcome as $word){
    echo "$word | ";
    }
}

sayHello();