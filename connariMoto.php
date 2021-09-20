<html>
<HEAD>
  <!--LINK href="master.css" rel="stylesheet" type="text/css"-->
</HEAD>
<body>

<?php
/*
$port = 3306;
$sshHost = "hotelli02.domainhotelli.fi";
$sshUn = "gwyokupv";
$sshPs = "JRLA-hotla";
*/
$un = "root";
$ps = "";
$server = "localhost";
$database = "jrla";
$table = "motari";

//show all erros if any
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//ssh connection

/*
use phpseclib\Net\SSH2 as SSHCon;
$ssh = new SSHCon($sshHost);
if (!$ssh->login($sshUn, $sshPs)) {
    exit('Login Failed');
}
else{
  print("ssh connection enabled");
}
/*
echo $ssh->exec('pwd');
echo $ssh->exec('ls -la');
*/

// Create connection to DB
$con = new mysqli($server, $un, $ps, $database);
// Check connection
if ($con->connect_error) {
    print "connection error";
    die("Connection failed: " . $con->connect_error);
}

/*For testing purposes
$sql = "SELECT * FROM juji where id = 1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - uke: " . $row["uke"]. " " . $row["tori"]. "<br>";
    }
} else {
    echo "0 results";
}
//$con->close();
*/
print "connected";
?>

</body>
</html>
