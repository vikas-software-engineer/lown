<?php

require('connection.php')

?>

<?php

$id = $_GET['id'];
// $sql="delete from form_student where sno ='$id'";
$sql = "delete from awasvikas where sno = '$id'";
echo "this is delete page";
mysqli_query($con,$sql);
header('location:awasvikas.php');
die();

?>

