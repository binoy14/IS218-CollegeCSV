<?php 

	require 'HtmlPrint.php';
	
	class PrintFullInfo {
		public function __construct($index, Array $records){
			$headings = self::getHeadings();
			HtmlPrint::openTable();
			
			foreach($records[$index] as $key => $value){
				HtmlPrint::openTr();
				echo '<th>' . $headings[$key] . '</th>';
				echo '<td>' . $value . '</td>';
				HtmlPrint::closeTr();
			}
			HtmlPrint::closeTable();
		}

		public function getHeadings(){
			$fileName = 'hd2013-varlist.csv';
			$parameter = 'r';
			$csv = new GetCsv();
			$headings = $csv->getCsv($fileName, $parameter);
			$finalHeading = array();
			foreach($headings as $heading){
				$finalHeading[$heading['varname']] = $heading['varTitle'];
			}
			return $finalHeading;
		}
	}

 ?>