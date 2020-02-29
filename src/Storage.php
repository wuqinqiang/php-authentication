<?php
namespace Remember\Auth;
interface Storage
{
    public function getPassword(string $appId);
}