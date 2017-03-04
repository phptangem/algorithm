<?php
class BubbleSort{
	public static function run($arr = array()){
		$n = count($arr);
		for($i = 1; $i < $n; $i++){
			for($j = 0; $j < $n-$i; $j++){
				if($arr[$j] > $arr[$j+1]){
					$temp = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $temp;
				}
			}
		}

		self::display($arr);
	}
	public static function display($arr){
		echo "<pre>";
		print_r($arr);
	}	
}
$arr = array(
	6,71,12,5,8,12,9,3,6452,44
);
BubbleSort::run($arr);
