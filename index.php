<!DOCTYPE html>
<html lang="en">
	<head>
		<title>College Records</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container">
			<?php 

				require 'GetCsv.php';
				require 'PrintCollegeName.php';
				require 'PrintFullInfo.php';
			
				ini_set('memory_limit', '-1');
				//ini_set('display_errors', 1);
				$fileName = 'hd2013.csv';
				$parameter = 'r';
				$csv = new GetCsv();
				$records = $csv->getCsv($fileName, $parameter);

				if(isset($_GET['college'])){
					$index = $_GET['college'];
					new PrintFullInfo($index, $records);
				} else{
					echo '<h1>Colleges in United States of America</h1>';
					echo '<ol class="college-names">';
					new PrintCollegeName($records);
					echo '</ol>';

				}
			 ?>
		</div>
	</body>
</html>
