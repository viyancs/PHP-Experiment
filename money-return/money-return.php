<?php

function money_return($price, $pay) {
    $info = 'success';
    $money = array();
    $money[0] = 50;
    $money[1] = 100;
    $money[2] = 200;
    $money[3] = 500;
    $money[4] = 1000;
    $money[5] = 2000;
    $money[6] = 5000;
    $money[7] = 10000;
    $money[8] = 20000;
    $money[9] = 50000;
    $money[10] = 100000;
    $returnMoney = array();
    $counter = 0;

    //checking if type is not number 
    if (is_numeric($price) === false || is_numeric($pay) === false) {
        return 'invalid input,input must be as number';
    }

    //checking if pay same with price
    if ($pay === $price) {
        $returnMoney[$pay] = ++$counter;
        $counter = 0;
        return $returnMoney;
    }

    //checking if price more big than pay, is not relevan data
    else if ($price > $pay)
        return 'your money is not enough';

    //price is possible < pay ,is relevan data, so process now
    $fixReturn = $pay - $price;

    //reverse array for counting from bigger number to lower, this case for otimal result
    $money = array_reverse($money);

    for ($i = 0; $i < count($money); $i++) {

        //filter devide not more big than fixReturn
        if ($money[$i] > $fixReturn) {
            continue;
        }
        
        //devide with optimum opportunities
        $opportunities = $fixReturn / $money[$i];
        
        //make sure $opportunities not decimal
        if (!is_float($opportunities)) {
            $fixReturn = $fixReturn - $money[$i] * $opportunities;
            $returnMoney[$money[$i]] = $opportunities;
        } else {

            $fixReturn = $fixReturn - $money[$i] * floor($opportunities);
            $returnMoney[$money[$i]] = floor($opportunities);
        }

        //if not have money to pay return fix
        if ($fixReturn < $money[10] && $fixReturn != 0)
            $info = "we don't have money for pay " . $fixReturn;
    }
    return $returnMoney;
}

$rm = money_return(1, 100000);
var_dump($rm);
?>
