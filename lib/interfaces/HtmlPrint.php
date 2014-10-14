<?php 

namespace lib\interfaces;

interface HtmlPrint {
	public function __construct($index, Array $records, $headings, $vertical = true);
}

 ?>