<?php

$json1 = '["Ha Noi","Ho Chi Minh","Da nang"]';

$json2 = '{"name":"an","age":21,"location":"Ha Noi"}';

$convert1 = json_decode($json1);  //giải mã
$convert2 = json_decode($json2);

echo "<pre>";
print_r($convert1);
echo "</pre>";

echo "<pre>";
print_r($convert2);
echo "</pre>";
