<?php 

if($_SERVER['REQUEST_METHOD'] == 'GET') {
	$tests = file_get_contents('end-point-arnie');
	echo $tests;
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$body_content = file_get_contents('php://input');
	$time = date('l d F g.ia',$_SERVER['REQUEST_TIME']);
	$request = "<div class='new-request'><h4>New payload recieved at {$time}</h4><ul><li>HTTP User Agent: {$_SERVER['HTTP_USER_AGENT']}</li><li>Remote Address: {$_SERVER['REMOTE_ADDR']}</li><li>Content Type: {$_SERVER['CONTENT_TYPE']}</li></ul></div>";
	$full = $request . '<br /><pre>' . $body_content . '</pre><hr />';
	$store_payload = file_put_contents('end-point-arnie',$full,FILE_APPEND);
	if($store_payload) {
		echo 'success';
	}
}
