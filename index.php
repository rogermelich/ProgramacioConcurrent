<?php

function myecho($callback) {
    echo "b\n";

    if(is_callable($callback)){
        call_user_func($callback);
    } else {
        echo $callback;
    }

}

function a(){
    echo "a\n";
}

myecho('a');

$x = 5;
myecho($x);

?>

