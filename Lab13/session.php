<?php

class session
{
    public function __construct()
    {
        session_start();
    }

    public function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function unset(string $key)
    {
        unset($_SESSION[$key]);
    }

    public function destroy()
    {
        session_destroy();
    }
}