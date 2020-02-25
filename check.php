<?php
// PHP Data Objects(PDO) Sample Code:
echo "<h1>Check Database Connection</h1>";
try {
    $conn = new PDO("sqlsrv:server = tcp:apsaa-local1.database.windows.net,1433; Database = apsaa-admin", "apsaalocal001", "Masood@12");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "apsaalocal001", "pwd" => "Masood@12", "Database" => "apsaa-admin", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:apsaa-local1.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>