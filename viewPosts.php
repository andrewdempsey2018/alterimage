<html><head><title>Get data</title></head>
<body>
<canvas id="canvas" width="128" height="128"></canvas>
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "posts";

#connect to MySQL
$dbconnect=mysqli_connect($hostname, $username, $password, $db) or die("Problem connecting to database");

if($dbconnect->connect_error)
{
    die("Database connection failed: " . $dbconnect->connect_error);
}


#select the specified database
$query = mysqli_query($dbconnect, "SELECT * FROM user_posts") or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query))
{

$anotherVar = $row['text'];
$someVar = $row['images'];
}

?>

<script>
    var canvas = document.getElementById("canvas");
    var context = canvas.getContext("2d");
    var image = "<?php echo $someVar; ?>";

document.getElementById('canvas').src = image;

</script>

</body>
</html>