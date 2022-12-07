### 特别说明
仅用于学习发包的一个测试项目，原作者:
https://packagist.org/packages/shitoudev/phone-location

### 功能
根据手机号查询归属地

### 提示
由于2019年11月携号转网已开始实行，手机号的运营商可能与实际不符，请谨慎将运营商信息用于重要的业务上。


### Installation
```
composer require "xuduan/phone-location"
```


### Usage
```php
<?php
use Xuduan\Phone\PhoneLocation;

// composer 方式安装
// include './vendor/autoload.php';

// 非 composer 方式安装的，引入文件
// include './src/PhoneLocation.php';
	
$pl = new PhoneLocation();
$info = $pl->find(18621281566);
print_r($info);

// Output;
Array
(
    [province] => 上海
    [city] => 上海
    [postcode] => 200000
    [tel_prefix] => 021
    [sp] => 联通
)
```

### Thanks
[https://github.com/lovedboy/phone](https://github.com/lovedboy/phone)

### License
[MIT license.](https://raw.githubusercontent.com/shitoudev/phone-location/master/LICENSE)