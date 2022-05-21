
<?php 
	$BASE_URL = "http://localhost/Cinama_booking";

	function get_url($resource){
		global $BASE_URL;
		$final = $BASE_URL . "/" . $resource;
		return $final;
	}
 ?>