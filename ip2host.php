<?php

/*
 
 Author - 0xWarning
 Github - @0xWarning / https://github.com/0xWarning
 Project - PHP api example with mysql keycheck
 Summary - Simple project someone might find usefull
 */


include 'handler.php';

error_reporting(0);

$key = $_GET['key'];

$handler = file_get_contents("include/handler.php?key={$key}&api=ip2host");

if ($handler == "success") {

    if (!isset($_GET["ip"])) {
        $errInf = array('ip' => 'undefined');

        $output = array('status' => 'format', $errInf);

        $jsonEnc = json_encode($output, JSON_PRETTY_PRINT);

        echo "<pre>" . $jsonEnc . "</pre>";
    } else {
        if (!isset($_GET["output"])) {
            $errInf = null;
            $errInf->output = 'undefined';
            $errInf->status = 'error';

            $jsonEnc = json_encode($errInf, JSON_PRETTY_PRINT);

            echo "<pre>" . $jsonEnc . "</pre>";
        } else {
            $output = $_GET["output"];
            if ($output == "html") {
                $ip = $_GET['ip'];
                $getHost = gethostbyaddr($ip);
                $status = "<font color=\"blue\">$getHost</font>";


                echo $ip . " is " . $status;

            } elseif ($output == "json") {

            }

        }
    }
}
else
{
    echo $handler;
}



