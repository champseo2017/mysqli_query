<?php
$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "itbookonline";
$con = new mysqli($db_host, $db_username, $db_pass)
                or die ("could not connect to mysql");
mysqli_select_db($con, $db_name) or die(mysqli_error($con));
/* change character set to utf8 */
if (!$con->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
}
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <?php 
    $products = array();
    $sql = "SELECT * FROM tbl_product ORDER BY pd_name";
    $result = mysqli_query($con, $sql) or die ('can not get product name');
    while($row = mysqli_fetch_array($result)){
        $products[] = $row['pd_name'];
    }
    ?>
    <pre>
    <?php
    var_dump($products);
    ?>
    </pre>
</body>
</html>>