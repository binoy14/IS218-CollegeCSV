<?php 

	namespace lib\classes;
	
	class PrintFullInfo implements \lib\interfaces\PrintFullInfo {
		public function __construct($index, Array $records, $vertical = true){
			$headings = self::getHeadings();
			new HtmlPrint($index, $records, $headings, $vertical);
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