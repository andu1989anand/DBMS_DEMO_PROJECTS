<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"mitcsestudent");
$sql="SELECT * FROM subjects WHERE scheme like '%$_POST[scheme]%' order by sem,subcode";
$result=mysqli_query($con,$sql);
echo "<table border='1'>
<tr>
<th>SUBCODE</th>
<th>TITLE</th>
<th>SEM</th>
<th>SCHEME</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr><td>" . $row['subcode'] . "</td>";
echo "<td>" . $row['subtitle'] . "</td>";
echo "<td>" . $row['sem'] . "</td>";
echo "<td>" . $row['scheme'] . "</td></tr>";
}
echo "</table>";
mysqli_close($con);
?>
