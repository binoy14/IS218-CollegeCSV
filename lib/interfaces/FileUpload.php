<?php 

namespace lib\interfaces;

interface FileUpload{
	public static function fileupload($fileName, $parameter);
	public function close($handler);
}
 ?>