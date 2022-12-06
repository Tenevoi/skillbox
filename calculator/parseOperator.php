<?php
include 'vars.php';
function parseOperator($userinput,$operator){
    $parsersult = explode($userinput,$operator);
    if ($parsersult && count($parsersult) == 2){

        return ['operators'=>$parsersult,'operator'=>$operator];
    }
    return false;
}
