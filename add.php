<?php
global $connection;
$host = "localhost";
$username = "root";
$password = "";
$dbname = "feed";

// Create connection method 2
$connection = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$name= $_POST ['name'];
$email= $_POST ['email'];
$feed= $_POST ['feed'];
?>
<html><head></head> <body>
        <h4>
<?php
$sql = "INSERT INTO data (name,email,feedback) VALUES('$name','$email','$feed')";
if(mysqli_query($connection, $sql)){
    echo "<h1>Data added successful</h1>";
}
else{
    echo "<h1>Data adding fail</h1>";
}?> 

</h4> <A href="form.html">Back to form</A>
</body>
</html>




