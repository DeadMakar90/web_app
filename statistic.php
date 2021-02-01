<!DOCTYPE html>
<html>
<head>
    <title>Статистика по датчикам</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
require('connect.php');
$sql="SELECT * FROM `STATISTIC` ";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
echo "<div class='container'>";
echo "<table class='table' border='1'>";
echo "<thead class='thead-dark'>
			<tr>
			<th scope='col'>Номер</th>
			<th scope='col'>Средняя температура</th>
			<th scope='col'>Средняя влажность</th>
			<th scope='col'>Дата</th>
			</tr>
		</thead>";
while ($row=mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['ID']."</td>";
    echo "<td>".$row['AVG_TEMP']."</td>";
    echo "<td>".$row['AVG_HUM']."</td>";
    echo "<td>".$row['DATE']."</td>";
    echo "</tr>";
}

echo "</table>";
echo "</div>";
mysqli_close();
?>
<a href="admins_form.php" class="btn btn-lg btn btn-info btn-block'" id="return">Назад</a>
</body>
</html>