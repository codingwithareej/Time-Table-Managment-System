<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$con = mysqli_connect('127.0.0.1','root');
mysqli_select_db($con,'time_table_managment_system');
?>
<!--FPDF-->
<?php
    Class dbObj{
        /* Database connection start */
        var $dbhost = "127.0.0.1";
        var $username = "root";
        var $password = "";
        var $dbname = "time_table_managment_system";
        var $conn;
        function getConnstring() {
        $con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());
        /* check connection */
        if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
        } else {
        $this->conn = $con;
        }
        return $this->conn;
        }
        }
?>