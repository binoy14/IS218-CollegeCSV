<?php 

	namespace lib\classes;
	
	class PrintFullInfo {
		public function __construct($index, Array $records){
			$headings = self::getHeadings();
			new HtmlPrint($index, $records, $headings);
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
			FileUpload::close($headings);
			return $finalHeading;
		}
	}

 ?>