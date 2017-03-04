<?php
class BinarySort{
	public static function run($arr, $left, $right,$num){
		if($left <= $right){
			$middle = intval(($left + $right) / 2);
			if($arr[$middle] < $num){
				return self::run($arr,$left + 1, $right, $num);
			}elseif($arr[$middle] > $num){
				return self::run($arr,$left, $right - 1, $num);
			}else{
				return $middle;
			}
		}
		return -1;
	}
}
$arr = array(5,9,15,25,34,47,55,76);
$left = 0;
$right = 7;
$num = 47;
$res = BinarySort::run($arr,$left, $right, $num);
print_r($res);die;