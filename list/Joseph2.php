<?php
class Node
{
	private $data;
	private $next;

	public function setData($value){
		$this->data = $value;
	}
	public function getData(){
		return $this->data;
	}
	public function setNext($value){
		$this->next = $value;
	}
	public function getNext(){
		return $this->next;
	}

	public function __construct($data, $next){
		$this->setData = $data;
		$this->setNext = $next;
	}
}

class LinkList
{
	private $header; //头结点
	private $size; //长度

	public function getSize(){
		$i = 0;
		$node = $this->header;
		while ($node->getNext() != null) {
			$i++;
			$node = $node->getNext();
		}

		return $i;
	}
	public function setHeader($value){
		$this->header = $value;
	}
	public function getHeader(){
		return $this->header;
	}
	public function __construct(){
		$this->setHeader(new Node(null, null));
	}

	public function add($data){
		$node = $this->getHeader();
		while ($node->getNext() != null) {
			$node = $node->getNext();
		}
		$node->setNext(new Node($data, null));
	}

	public function removeAt($data){
		$node = $this->getHeader();
		while ($node &&　$node->getData() != $data) {
			$node = $node->getNext();
		}
		if($node->getData() == $data ){
			$node->setNext($node->getNext()->getNext());
			$node->setData($node->getNext()->getData());
		}
	}
}