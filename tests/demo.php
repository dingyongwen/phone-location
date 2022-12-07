<?php

use Xuduan\Phone\PhoneLocation;

include './src/PhoneLocation.php';

# php tests/demo.php

// 查找单个手机号码归属地信息
$pl = new PhoneLocation();
$phone = 18621281566;
$info = $pl->find($phone);
print_r($info);
