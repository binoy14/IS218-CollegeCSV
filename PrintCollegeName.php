<?php 

	class PrintCollegeName {
		public function __construct(Array $records){
			$i = -1;
			foreach($records as $record){
				$i++;
				echo '<li><a href="?college=' .$i. '">' . $record['INSTNM'] . '</a></li>';
			}
		}
	}
 ?>