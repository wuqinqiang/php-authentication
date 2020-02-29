<?php

namespace Remember\Auth;

class AuthToken
{
    protected $storage;

    public function __construct()
    {
        $this->storage = new FileStorage();
    }

    public function getString($secret, $data)
    {
        ksort($data);
        $params = http_build_query($data);
        return $params . $secret;
    }

    private function getPassword($appId)
    {
        return $this->storage->getPassword($appId);
    }

    public function getToken($data)
    {
        unset($data['token']);
        $secret = $this->getPassword($data['appId']);
        if (!$secret) return null;
        ksort($data);
        return md5($this->getString($secret, $data));
    }


    public function tokenIsEffective($time): bool
    {
        if (!$time || $time == null) {
            return false;
        }
        if (time() - $time > 10) {
            return false;
        }

        return true;
    }

    public function verifyToken($data)
    {
        if (!$data['appId'] || !$data['token'] || !$data['time']) {
            throw new ParamsException('请求不合法');
        }
        if (false === $this->tokenIsEffective($data['time'])) {
            throw new TimeOutException('时间超了');
        }
        if ($data['token'] != $this->getToken($data)) {
            throw new ParamsException('参数不正确');
        };
        echo '验证通过';
    }

}