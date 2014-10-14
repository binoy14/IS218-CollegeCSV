<?php 

namespace lib\interfaces;

interface PrintFullInfo{
	public function __construct($index, Array $records, $vertical = true);
	public function getHeadings();
}

 ?>