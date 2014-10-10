<?php 

	class PrintCollegeName {
		public function __construct(Array $records){
			$i = -1;
			foreach($records as $record){
				$i++;
				echo '<li><a target="_blank" class="college-name-link" href="?college=' .$i. '">' . $record['INSTNM'] . '</a></li>';
			}
		}
	}
 ?>