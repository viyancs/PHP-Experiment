Deal-Card
---------
deal card is divide card for some users and will be use for playing game , example we have 20 card and 5 users so this function will be return 5 users and have 4 card. 

Algorithm
---------
<ol>
<li> put modulus from number of card length / much users </li>
<li> filter number of card length by not include modulus </li>
<li> create number of card to one array from filter number </li>
<li> sort that array with divide of how much users </li>
<li> splice that array with divide of how much users, with this will be result array per user.</li>
</ol>
Usage
-----
<pre>

$card_number = '15343178913473948537594'; 
$players = 5;
$deal_card = deal_card($players,$card_number);
print_r(array_chunk($deal_card, count($deal_card) / $players));

//the result 
Array
(
    [0] => Array
        (
            [0] => 1
            [1] => 1
            [2] => 3
            [3] => 4
        )

    [1] => Array
        (
            [0] => 5
            [1] => 7
            [2] => 4
            [3] => 8
        )

    [2] => Array
        (
            [0] => 3
            [1] => 8
            [2] => 7
            [3] => 5
        )

    [3] => Array
        (
            [0] => 4
            [1] => 9
            [2] => 3
            [3] => 3
        )

    [4] => Array
        (
            [0] => 3
            [1] => 1
            [2] => 9
            [3] => 7
        )

)

//you can see array[0] is user 1 , array[1] is user 2 ,ect

</pre>

Tested
------
<ol>
<li> Testing with number is good </li>
</ol>

Reference
---------
function (uksort)[php.net/manual/en/function.uksort.php]