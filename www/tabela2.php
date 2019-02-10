<!doctype html>
<html lang="pl-PL">
<head>
<!--<script type="text/javascript" src="/www/www/js/skrypt_table.js"></script>-->
</head>
<body>
<!--<?php header('Content-type: text/html; charset=UTF-8'); ?>-->
<?php
$date1 = $_POST['d1'];
//echo $date1;
//echo "<br>";
require "connection.php";
connection();
echo "<table id='table2' class='fixed_headers' style='width:100%;' border='1'>
<thead>
	<tr>
		<th style='width:25%;' >Imię</th>
		<th style='width:25%;'>Nazwisko</th>
		<th style='width:25%;'>Dostawca</th>
		<th style='width:25%;'> Danie</th>
	</tr>
</thead>";
echo "<tbody >";
if($result = mysqli_query($link,"select * from login, orders WHERE data='$date1'  and login.id_users = orders.id_users order by dostawca ASC")){

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr >
				<td style='width:350px;'>";
        echo $row["my_first_name"];
        echo "</td>";
        echo "<td style='width:350px;'>";
        echo  $row["my_name"];
        echo "</td>";
        echo "<td style='width:350px;'>";
        echo $row["dostawca"];
        echo "</td>";
        echo "<td style='width:350px;'>";
        echo $row["numer"];
        echo "</td>";
        echo "</tr>";
    }
}
mysqli_free_result($result);
mysqli_close($link);
echo "</tbody>
</table>";
?>
</body>
</html>
