<?php

namespace Remember\Auth;

class FileStorage implements Storage
{
    public function getPassword(string $appId)
    {
        $data = json_decode(file_get_contents(__DIR__ . '/auth.log'));
        return $data->$appId ?? null;
    }
}