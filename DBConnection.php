
    <?php
    $mysql_hostname = "127.0.0.1";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "injection";
    $prefix = "";
    $bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
    mysqli_select_db($bd,$mysql_database) or die("Could not select database");
    extract($_POST);
extract($_GET);
    ?>