<?php 

	namespace lib\classes;
	
	class FileUpload {
		
		static public function fileupload($fileName, $parameter){
			$handler = fopen($fileName, $parameter);
			return $handler;
		}

		public function close($handler){
			fclose($handler);
		}
	}
?>