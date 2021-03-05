<?php

require('connection.php')

?>
<?php

$id = $_GET['id'];
$sql2 = "delete from cities where sno = '$id'";
mysqli_query($con,$sql2);
header('location:cities.php');
die();

?>

