<?php 

namespace lib\interfaces;

interface GetCsv{
	public function __construct();
	public function getCsv($fileName, $parameter);
}

 ?>