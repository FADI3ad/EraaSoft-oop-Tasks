<?php


class Session
{



    public static function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return false;
    }
 
    public static function set($key, $value)
    {
        if (!isset($_SESSION[$key])) {
            $_SESSION[$key] = $value;
            return true;
        }

        return false;
    }


    public static function flash($key)
    {

        if (isset($_SESSION[$key])) {
            $value = $_SESSION[$key];
            unset($_SESSION[$key]);
            return $value;
        }
        return false;
    }
    public static function remove($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
            return true;
        }
        return false;
    }

    public static function removeAll()
    {
        session_unset();
    }

    public static function getAll()
    {
        return $_SESSION;
    }


    public static function has($key)
    {
        if (isset($_SESSION[$key])) {
            return true;
        }
        return false;
    }
}
