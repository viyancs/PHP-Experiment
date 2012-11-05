<?php 
$card_number = '15343178913473948537594'; 
$players = 5;

/**
 * generating array deal card 
 * @return
 * array sorted by index using uksort function
 */
function deal_card($players,$card_number) {
	$mod_bil = strlen($card_number) % $players;
	$dealing = strlen($card_number) / $players;
	echo "players = " . $players .'<br/>';
	echo "card number before modulus = " . $card_number .'<br/>';
	echo "card length before modulus = " . strlen($card_number) .'<br/>';
	echo "modulus = " . $mod_bil .'<br/>';
	echo "dealing = " . floor($dealing) .'<br/>';
	$after_mod = substr($card_number,0,strlen($card_number) - $mod_bil);
	echo "card number after modulus = " . $after_mod .'<br/>';
	echo "card length after modulus = " . strlen($after_mod) .'<br/>';
	
	$data_array = array();
	
	//generate array from card
	for($i=0;$i<strlen($after_mod); $i++) {
		$data_array[$i] = $after_mod[$i];
	}

	//custom sorting index of array
    uksort($data_array, array(new Custom_Sorting($players), "call"));
	
	return $data_array;
	
}

/**
 * custom sort using 3 parameter 
 * using 3  parameter you must set callback for getting parameter
 */
function custom_sort($a, $b,$players)
{
		//echo '%3 dari ' .$a . ' = ' .$a % 3 . ' %3 dari ' . $b . ' = ' .$b % 3 .'<br/>';
		if ($a % $players == $b % $players) {
			if($a < $b ) return -1;
			if($a > $b ) return +1;	
		}
		if ($a % $players > $b % $players ) return +1;
		if ($a % $players < $b % $players ) return -1;
		return 0;
		
}
	
$deal_card = deal_card($players,$card_number);

print_r(array_chunk($deal_card, count($deal_card) / $players));

/**
 * create callback for handlng anynomous function because this php version 5.2 
 * so not support use($params).
 */
class Custom_Sorting
{
    private $players;

    function __construct( $players ) {
        $this->players = $players;
    }

    function call( $a, $b ) {
        return custom_sort($a, $b, $this->players);
    }
}


?>