
<?php 
	$BASE_URL = "http://localhost/cinama";

	function get_url($resource){
		global $BASE_URL;
		$final = $BASE_URL . "/" . $resource;
		return $final;
	}
 ?>