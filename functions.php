<?php 

function tnatheme_globals() {
	global $pre_path;
	global $pre_crumbs;
	if (substr($_SERVER['REMOTE_ADDR'], 0, 3) === '10.') {
		$pre_path = '';
		$pre_crumbs = array(
				'Get involved' => '/'
			);
	} else {
		$pre_crumbs = array(
				'About us' => '/about/',
				'Get involved' => '/about/get-involved/'
			);
		$pre_path = '/about/get-involved';
	}
}
tnatheme_globals();

?>