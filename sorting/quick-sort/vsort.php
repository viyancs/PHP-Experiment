<?php
/**
 * vquicksort is function for sorting data with quicksort metode
 * this function dependencies on this article http://en.wikipedia.org/wiki/Quicksort
 * check array if just one value return that , because one number can not sort
 * select a pivot from array value and remove that , becasue we don't compare pivot with pivot
 * create empty array for less number than pivot and create array for higher number that pivot
 * check if number comparison <= pivot place to less array, if not, place to higher array, this is will be any 2 array less and higher , and one pivot
 * recursive function on array less,and higher array.
 * merge array less after recursive, array pivot , and array higher after recursive, pivot must be set as array
 * 
 * @author M Sofiyan
 * @email msofyancs@gmail.com
 * @skypeid viyancs
 * @url https://github.com/viyancs/PHP-Experiment/tree/master/sort/quick-sort
 * @reference
 	article : 
		http://en.wikipedia.org/wiki/Quicksort
		http://www.squidoo.com/sorting-algorithms
	video : 
		http://www.youtube.com/watch?v=ywWBy6J5gz8&feature=relmfu (it's so funny video i think, but with that, people can be easily to understand quicksort.)
		http://www.youtube.com/watch?v=KMZ_N1PsF4U ( this video will be compare quicksort vs buble sort)
 *
 * @important
 * if you want to using part of full this code, please don't remove this comment
 */ 
function vquicksort($data) {
	
	//check if array just one
	if(!count($data)) return $data;
	
	//select a pivot value from array and remove that
	$pivot = $data[0]; unset($data[0]);
	
	//create less empty array
	$less = array();
	
	//create higher empty array
	$higher = array();
	
	foreach($data as $key => $val) {
		//echo 'pivot ' .$pivot . ' compare with = ' . $val . '<br/>';
		if( $val <= $pivot ) {
			array_push($less,$val);
		} 
		else {
			array_push($higher,$val);
		}
	}
	
	//merge array of less, pivot ,higher and recursive sort function
	return array_merge(vquicksort($less), array($pivot), vquicksort($higher));
}

$data = array(5,23,3,5,8,1,0,3,8,9,11,15);
print_r(vquicksort($data));



?>