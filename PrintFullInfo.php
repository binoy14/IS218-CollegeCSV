<?php 

	class PrintFullInfo {
		public function __construct($index, Array $records){
			$headings = self::getHeadings();
			echo '<table class="table table-bordered">';
		
			foreach($headings as $heading){
				echo '<th>' . $heading['varTitle'] . '</th>';
			}
		
			echo '<tr>';
		
			foreach($records[$index] as $record){
				echo '<td>' . $record . '</td>';
			}
		
			echo '</tr>';
			echo '</table>';
		}

		public function getHeadings(){
			$fileName = 'hd2013-varlist.csv';
			$parameter = 'r';
			$csv = new GetCsv();
			$headings = $csv->getCsv($fileName, $parameter);

			return $headings;
		}
	}

 ?>