<!DOCTYPE html>
<html lang="en">
	<head>
		<title>College Records</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	</head>
	<body>
		<div class="container">
			<ol>
				<?php 

					require 'GetCsv.php';
					require 'PrintCollegeName.php';

					$fileName = 'hd2013.csv';
					$parameter = 'r';
					$csv = new GetCsv();
					$records = $csv->getCsv($fileName, $parameter);
					
					new PrintCollegeName($records);
				 ?>
			</ol>
		 </div>
	</body>
</html>