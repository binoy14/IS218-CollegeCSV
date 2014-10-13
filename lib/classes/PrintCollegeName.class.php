<?php 
	
	namespace lib\classes;
	
	class PrintCollegeName {
		public function __construct(Array $records){
			$i = -1;
			foreach($records as $record){
				$i++;
				echo '<li><a class="college-name-link" href="?college=' .$i. '">' . $record['INSTNM'] . '</a></li>';
			}
		}
	}
 ?>