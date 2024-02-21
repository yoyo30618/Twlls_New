<?php
    $conn = new mysqli('localhost', 'root', 'yoyo0516', 'twlls');
    $conn->query("SET NAMES UTF8mb4");
    if ($conn->connect_error) {
        print json_encode($arr);
        return;
    }
    function mysql_string_safe($con, $stringtoclean)
    {
        $safestring = mysqli_real_escape_string($con, $stringtoclean);
        return $safestring;
    }
?>