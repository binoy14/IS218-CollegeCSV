<?php 

	namespace lib\classes;
	
	class HtmlPrint{
		static public function openTable(){
			echo '<table class="table table-bordered table-responsive">';
		}

		static public function closeTable(){
			echo '</table>';
		}

		static public function openTr(){
			echo '<tr>';
		}

		static public function closeTr(){
			echo '</tr>';
		}
	}
 ?>