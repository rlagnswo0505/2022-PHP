<?php
define("URL", "localhost");
define("USERNAME", "root");
define("PASSWORD", "506greendg@");
define("DB_NAME", "board5");
function get_conn()
{
    return mysqli_commit(URL, USERNAME, PASSWORD, DB_NAME);
}
