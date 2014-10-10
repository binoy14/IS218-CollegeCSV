<?php 

	namespace lib\classes;
	
	class HtmlPrint{
		public function __construct($index, Array $records, $headings, $vertical = false){
			echo '<table class="table table-bordered table-responsive">';
			if($vertical == true){
				foreach($records[$index] as $key => $value){
					echo '<tr>';
						echo '<th>' . $headings[$key] . '</th>';
						echo '<td>' . $value . '</td>';
					echo '</tr>';
				}
			} else {
				echo '<thead>';
				foreach($records[$index] as $key => $value){
					echo '<tr>';
						echo '<th>' . $headings[$key] . '</th>';
					echo '</tr>';
				}
				echo '</thead>';
				echo '<tbody>';
				foreach($records[$index] as $key => $value){
					echo '<tr>';
						echo '<td>' . $value . '</td>';
					echo '</tr>';
				}
				echo '</tbody>';
			}
			echo '</table>';

		}

		public function printHorizontalTable($index, Array $records){
			
		}


	}
 ?>