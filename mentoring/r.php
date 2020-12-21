<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"mitcsestudent");
$sql="SELECT * FROM student WHERE name like '%$_POST[name]%' order by sem,sec";
$result=mysqli_query($con,$sql);
echo "<table border='1'>
<tr>
<th>NAME</th>
<th>USN</th>
<th>SEM</th>
<th>SEC</th>
<th>BATCH</th>
<th>TYPE</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr><td>" . $row['name'] . "</td>";
echo "<td>" . $row['usn'] . "</td>";
echo "<td>" . $row['sem'] . "</td>";
echo "<td>" . $row['sec'] . "</td>";
echo "<td>" . $row['batch'] . "</td>";
echo "<td>" . $row['type'] . "</td></tr>";
}
echo "</table>";
mysqli_close($con);
?>
