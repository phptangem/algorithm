<?php
//二维数组排序
class ArraySort{
	public static function run($arr, $key, $order){
		
		$columns = array_column($arr, $key);
		if($order == 'asc'){
			asort($columns);
		}else{
			arsort($columns);
		}

		$ret = array();

		foreach ($columns as $key => $value) {
			 array_push($ret, $arr[$key]);
		}

		return $ret;
	}
}
 //测试
 $person=array(
     array('id'=>2,'name'=>'zhangsan','age'=>23),
     array('id'=>5,'name'=>'lisi','age'=>28),
     array('id'=>3,'name'=>'apple','age'=>17)
 );
$ret = ArraySort::run($person, 'id', 'asc');
echo "<pre>";
print_r($ret);
die;