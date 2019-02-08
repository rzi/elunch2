<?php
$date1 = $_POST['d1'];
//echo $date1;
//echo "<br>";
require "connection.php";
connection();
echo "<table id='table2' class='fixed_headers_d' style='width:100%;' border='1'>
<thead style='width:98%;'>
	<tr style='width:98%;'>
		<th style='width:250px;'>Imię</th>
		<th style='width:250px;'>Nazwisko</th>
		<th style='width:250px;'>Dostawca</th>
		<th style='width:250px;'> Danie</th>
	</tr>
</thead>";
echo "<tbody style='width:100%;'>";
if($result = mysqli_query($link,"select * from login, orders WHERE data='$date1'  and login.id_users = orders.id_users order by dostawca ASC")){

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr style='width:100%;'><td style='width:250px;'>";
        echo $row["my_first_name"];
        echo "</td>";
        echo "<td style='width:250px;'>";
        echo  $row["my_name"];
        echo "</td>";
        echo "<td style='width:250px'>";
        echo $row["dostawca"];
        echo "</td>";
        echo "<td style='width:450px'>";
        echo $row["numer"];
        echo "</td>";
        //echo "<tr>";
    }
}
mysqli_free_result($result);
mysqli_close($link);
echo "</td>
    </tr>
  </tbody>
</table>";
?>
