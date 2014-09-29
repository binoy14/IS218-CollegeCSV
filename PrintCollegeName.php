<?php 

	class PrintCollegeName {
		public function __construct(Array $records){
			foreach($records as $record){
				echo '<li>' . $record['INSTNM'] . '</li>';
			}
		}
	}
 ?>