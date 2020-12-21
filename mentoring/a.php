<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}
else
echo "login successfull";
mysqli_select_db( $con,"anand");
$sql="INSERT INTO anand.emp VALUES('$_POST[eid]','$_POST[mob]','$_POST[salary]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "1 Record Added";
mysqli_close($con);
?>
