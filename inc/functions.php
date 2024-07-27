<?php
function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER["PHP_SELF"]);
    if ($current_file_name == $requestUri)
        echo 'active';
}
