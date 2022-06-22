<?php
if (!isset($_SESSION)) {
    session_start();
}

function flash($name = '', $val = '')
{
    if (!empty($name)) {
        //공백이 아니면
        if (!empty($val) && empty($_SESSION[$name])) {
            $_SESSION[$name] = $val;
        } elseif (empty($val) && !empty($_SESSION[$name])) {
            unset($_SESSION[$name]);
        }
    }
}
