<?php

define("FILE_PATH","/callback/payment"); //文件目录
require_once '../../system/system_init.php';

require_once APP_ROOT_PATH."system/payment/Wyunpay_payment.php";
$o = new Wyunpay_payment();
$_POST['from'] = "wap";
$o->response($_REQUEST);

?>