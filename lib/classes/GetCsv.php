<?php 
	
	namespace lib\classes;
	
	class GetCsv implements \lib\interfaces\GetCsv {


		public function __construct(){
			ini_set('auto_detect_line_endings', TRUE);
		}

		public function getCsv($fileName, $parameter){
			$first_row = TRUE;
			if(($handler = FileUpload::fileupload($fileName,$parameter)) !== FALSE){
				while(($row = fgetcsv($handler, ",")) !== FALSE){
					if($first_row == TRUE){
						$column_heading = $row;
						$first_row = FALSE;
					} else {
						$record = array_combine($column_heading, $row);
						$records[] = $record;
					}
				}
			}
			FileUpload::close($handler);
			return $records;
		}
	}

 ?>