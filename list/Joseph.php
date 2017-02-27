<?php
/*
*约瑟夫环
*/
class Joseph
{
	
	private $circle;
	private $outNum;
	//$outNum 出局的编号
	//$totalNum 总共的人数
	public function process($outNum, $totalNum){
		$this->circle = range(1, $totalNum);
		$remainNum = $totalNum;
		$index = 0;
		while ($remainNum > 1) {
			$i = 0;
			while($i < $outNum){
				$index= $index % $totalNum;
				if($this->circle[$index]){
					$i++;
				}
				$index++;
			}
			$this->circle[$index-1] = false;
			$remainNum--;
			
		}
	}
	public function show(){
		echo "<pre>";
		print_r($this->circle);
	}
}
$joseph = new Joseph();
$joseph->process(4,3);
$joseph->show();