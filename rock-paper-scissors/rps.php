<?php 
define('ROCK',0);
define('PAPER',1);
define('SCISSORS',2);
define('LOSE','Lose');
define('WIN','Win');
define('DRAW','Draw');
define('ERR','Incorect Value');


function whoIsWin($a,$b) {
	
   if($a === $b ) return DRAW;
   else if($a === ROCK && $b === PAPER ) return LOSE; 
   else if($a === ROCK && $b === SCISSORS ) return WIN;
   else if($a === PAPER && $b === ROCK ) return WIN;
   else if($a === PAPER && $b === SCISSORS) return LOSE;
   else if($a === SCISSORS && $b === ROCK ) return LOSE;
   else if($a === SCISSORS && $b === PAPER ) return WIN;
   else return ERR;

} 

$who = whoIsWin(ROCK,PAPER);
echo($who);
exit;

?>
