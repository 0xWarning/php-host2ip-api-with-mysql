<?php

/*
 
 Author - 0xWarning
 Github - @0xWarning / https://github.com/0xWarning
 Project - PHP api handler example
 Summary - Simple project someone might find usefull
 */

error_reporting(0);

include 'config.php';

$apiKeys = array('test');

if(!isset($_GET["key"]))
{
    $errInf = null;
    $errInf->key = 'undefined';
    $errInf->status = 'error';

    $jsonEnc = json_encode($errInf, JSON_PRETTY_PRINT);

    echo "<pre>" . $jsonEnc . "</pre>";
}
else
{
    if(empty($_GET["key"]))
    {
        $errInf = null;
        $errInf->key = 'null';
        $errInf->status = 'error';

        $jsonEnc = json_encode($errInf, JSON_PRETTY_PRINT);

        echo "<pre>" . $jsonEnc . "</pre>";
    }
    else
    {
        $key = $_GET['key'];
        $result = mysqli_query($con, "SELECT * FROM `keys` WHERE `key` = '$key'") or die(mysqli_error($con));


        if(mysqli_num_rows($result) < 1){

            echo 'invalid';

        }elseif(mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_array($result)) {

                if(!isset($_GET["api"]))
                {
                    $errInf = null;
                    $errInf->api = 'undefined';
                    $errInf->status = 'error';

                    $jsonEnc = json_encode($errInf, JSON_PRETTY_PRINT);

                    echo "<pre>" . $jsonEnc . "</pre>";
                }
                else
                {
                    if(empty($_GET["api"]))
                    {
                        $errInf = null;
                        $errInf->api = 'null';
                        $errInf->status = 'error';

                        $jsonEnc = json_encode($errInf, JSON_PRETTY_PRINT);

                        echo "<pre>" . $jsonEnc . "</pre>";
                    }
                    else
                    {
                        echo "success";
                    }
                }


            }
        }
       
    }
}


?>