<?php 

if(isset($_GET['inspect'])) {

	$tests = file_get_contents('end-point-arnie');
	$array = array_reverse(explode(PHP_EOL,$tests));
	foreach ($array as $request) {
		if(strlen($request) > 0) {
			$data = unserialize($request);
			foreach ($data as $key => $value) {
				if($key == 'time' ) {
					$value = date('l d F g.ia',$value);
				}

				if(is_array($value) || is_object($value)) {
					var_dump($value);
				} else {
					echo "<strong>".$key .":</strong> ".$value."<br />";
				}
			}
		}
	}

} else {

	if($_SERVER['CONTENT_TYPE'] != 'application/json') {
		if($_POST) {
			$body_content = $_POST;
		} else {
			$body_content = file_get_contents('php://input');
		}
	} else {
		$body_content = json_decode(file_get_contents('php://input'));
	}

	$request = [
		'method' => $_SERVER['REQUEST_METHOD'],
		'content_type' => $_SERVER['CONTENT_TYPE'],
		'content_length' => $_SERVER['CONTENT_LENGTH'],
		'request_uri' => $_SERVER['REQUEST_URI'],
		'protocol' => $_SERVER['SERVER_PROTOCOL'],
		'remote_address' => $_SERVER['REMOTE_ADDR'],
		'remote_port' => $_SERVER['REMOTE_PORT'],
		'user_agent' => $_SERVER['HTTP_USER_AGENT'],
		'time' => $_SERVER['REQUEST_TIME'],
		'body' => $body_content,
	];
	$store_payload = file_put_contents('end-point-arnie', serialize($request).PHP_EOL, FILE_APPEND);
	if($store_payload) {
		echo 'success';
	}	
}
	


