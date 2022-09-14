<?php

# função usada para debugar código na tela "die dump = dd"

function dd($params = [], $die = true){

    echo '<pre>';
    print_r($params);
    echo '<pre>';


    if($die) die();
}