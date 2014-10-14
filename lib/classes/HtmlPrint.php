<?php 

	namespace lib\classes;
	
	class HtmlPrint implements \lib\interfaces\HtmlPrint {
		public function __construct($index, Array $records, $headings, $vertical = true){
			echo '<table class="table table-bordered table-responsive">';
			if($vertical == true){
				foreach($records[$index] as $key => $value){
					echo '<tr>';
						echo '<th>' . $headings[$key] . '</th>';
						echo '<td>' . $value . '</td>';
					echo '</tr>';
				}
			} else {
				echo '<tr>';
				foreach($records[$index] as $key => $value){
						echo '<th>' . $headings[$key] . '</th>';
				}
				echo '</tr>';
				echo '<tr>';
				foreach($records[$index] as $key => $value){
						echo '<td>' . $value . '</td>';
				}
				echo '</tr>';
			}
			echo '</table>';
		}
	}
 ?>