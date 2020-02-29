### php接口签名以及验证

### 简单实例 
```php
<?php

$secret = 'wuqinqiang';
$data = [
    'username' => 'remember',
    'sex' => '1',
    'appId' => 438,
    'time' => time(),
];
//1582986793
function getSign($data, $secret)
{
    ksort($data);
    $params = http_build_query($data);
    return md5($params . $secret);
}

$data['token'] = getSign($data, $secret);

$token = new \Remember\Auth\AuthToken();

$token->verifyToken($data);




```
