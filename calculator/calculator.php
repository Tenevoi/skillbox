//передача в функцию переменного кол-ва аргументов возможность передать неограниченное кол-во операндов
// при вызове функции аргумент $numbers автоматически преобразуется в массив
<?php
$suportedOperators = ['+','-','*'];
//include 'calculateOperation.php';
include 'vars.php';


function calculateOperation(int $a,int $b,string $operation= '+'){
    if ($operation=='+'){
    return$a+$b;
    }
elseif ($operation=='-'){
    return $a-$b;
    }

elseif ($operation=='*'){
    return $a*$b;
    }
 }
function parseOperator($userinput,$operator){
    $parsersult = explode($userinput,$operator);
    if ($parsersult && count($parsersult) == 2){

        return ['operators'=>$parsersult,'operator'=>$operator];
    }
    return false;
}
do{
    $userinput = readline('введите выражение:');
    foreach ($suportedOperators as $operator){
        $parsersult = parseOperator($userinput, $operator);
        if ($parsersult){
       echo 'Результат =' .    calculateOperation(intval($parsersult['operators'][0]),intval($parsersult['operators'][1]),$parsersult['operator']).PHP_EOL;
        }
    }
}while(true);













//echo calculateOperation(5,5,'+');

//function calculateSumm(...$numbers){
//    $summ=0;
//    foreach ($numbers as $number){
//
//     $summ += $number;
//    }
//        return $summ;
//    }
//
//echo calculateSumm(1,2,3,4);





