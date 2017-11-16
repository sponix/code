<html>
<head>
<title>Life Expectancy</title>
<h1>Life Expectancy for North America listed in Years High to Low</h1>
</head>
<body>
<br>

<?php

include('mysqli_connect.php');
echo 'connected to the database' . '<br>';


$res=mysqli_query($db, "select name,continent,lifeexpectancy from country where continent='North America' order by lifeexpectancy desc");
echo 'query worked' . '<br>';

echo '<table border=2 cellpadding=10>';
echo '<tr><th>Name</th><th>Continent</th><th>Life Expectancy</th></tr>';
while ($row = $res->fetch_object()){
echo '<tr>';
echo '<td>' . $row->name . '</td>';
echo '<td>' . $row->continent . '</td>';
echo '<td>' .  $row->lifeexpectancy . '</td>';
echo '</tr>';
}

echo '<table>';

mysqli_free_result($res);
echo 'result free' . '<br>';

mysqli_close($db);
echo 'closed the database';

?>

</body>
</html>
