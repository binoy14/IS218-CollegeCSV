<?php 

namespace lib\interfaces;

interface HtmlPrint {
	public function __construct($index, Array $records, $headings, $vertical = true);
	public static function makeLinks(Array $records, $urlName, $printName);
}

 ?>