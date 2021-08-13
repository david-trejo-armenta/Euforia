<?php
    $req = "cmd=_notify-synch";
    $tx_token = $_GET['tx'];
    $auth_token = "<your auth token here>";
    $req .= "&tx=$tx_token&at=$auth_token";

    //Post back to Paypal system to validate:
    $header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
    $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
    $header .= "Content-Length: " . strlen($req) . "\r\n\r\n";

    $fp = fsockopen('ssl://www.paypal.com', 443, $errno, $errstr, 30);
    if (!$fp) {
        //HTTP ERROR
    }
    else {
        fputs($fp, $header . $req);

        //Read body data:
        $res = '';
        $headerdone = false;
        while (!feof($fp)) {
            $line = fgets($fp, 1024);
            if (strcmp($line, "\r\n") == 0) {
                $headerdone = true;
            }
            else{
                $res .= $line;
            }
        }

        //Parse the data:
        $lines = explode("\n", $res);
        $keyarray = array();
        if (strcmp($lines[0], "SUCCESS") == 0) {
            //Checks the payment_status is completed
            //check that txn_id has not been previously processed
            for ($i = 0; $i < count($lines); $i++) {
                list($key, $val) = explode("=", $lines[$i]);
                $keyarray[urldecode($key)] = urldecode($val);
            }
        }

        //Process payment:
        $firstname = $keyarray['first_name'];
        $lastname = $keyarray['last_name'];

        //etc... you can either insert the payment data into your database for future reference
        //Or set up a COOKIE for the user to be able to download your file.
        //Or if your payment has been successful, redirect him to a "secret" page where the file is visible.
    }
?>