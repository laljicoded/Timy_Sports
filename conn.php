<?php 
    $BasePath= "https://exambharo.com/";
    $pageurl = $_SERVER['REQUEST_URI'];
    $pageurlArr = explode("/", $pageurl);

    // DB Connection
    $servername = '89.117.188.154';
    $username = 'u810300875_timysports';
    $database = 'u810300875_timysports';
    $password = 'yD&r&knD#2';
    $DB = new mysqli($servername, $username, $password, $database);
    // Check Connection 
    if ($DB->connect_error) {
        die("connection failed:" . $conn->connect_error);
    }
    
    function consoler($var="null"){
        echo '<script>console.log("'.$var.'");</script>';
    }

?>
