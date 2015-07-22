<?php 

require_once '../../lib'.DIRECTORY_SEPARATOR.'curl.php';
require_once '../../lib'.DIRECTORY_SEPARATOR.'curl_response.php';

$curlobj = new Curl();

$destpath = "/home/work/test/1.txt";
$data_arr = array(
    'my_file'=>'@'.$destpath,
);

$url = "http://139.129.xx.xxx:8080/upload_server.php";
$response = $curlobj->post($url,$data_arr);
var_dump($response);



