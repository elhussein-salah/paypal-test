<?php

    //host
    define("HOST","localhost");
    define("DBN","pay");
    define("USERNAME","root");
    define("PASSWORD","");

    $DSN = "mysql:host=".HOST.";dbname=".DBN.";";
    $conn = new PDO($DSN,USERNAME,PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // if ($conn == true)
    //     echo 1;
    // else
    //     echo 0;
     