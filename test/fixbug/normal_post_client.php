<?php 

require_once '../../lib'.DIRECTORY_SEPARATOR.'curl.php';
require_once '../../lib'.DIRECTORY_SEPARATOR.'curl_response.php';

$curlobj = new Curl();

$data_arr = array(
    'var1'=>'中文',
    'var2'=>'@hello',
    'var3'=>'world',
);

$url = "http://139.129.15.187:8080/normal_post_server.php";
$response = $curlobj->post($url,$data_arr);
var_dump($response);



