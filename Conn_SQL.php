<?php
    $conn = new mysqli('localhost', 'vhost100843', 'tlls2015', 'vhost100843');
    $conn->query("SET NAMES UTF8");
    if ($conn->connect_error) {
        print json_encode($arr);
        return;
    }
    $conn_1 = new mysqli('localhost', 'vhost100843', 'tlls2015', 'vhost100843-1');
    $conn_1->query("SET NAMES UTF8");
    if ($conn_1->connect_error) {
        print json_encode($arr);
        return;
    }
    function mysql_string_safe($con, $stringtoclean)
    {
        $safestring = mysqli_real_escape_string($con, $stringtoclean);
        return $safestring;
    }
?>