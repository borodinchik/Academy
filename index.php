<?php
$host = 'localhost';
$bd_name = 'new_bd_name';
$user = 'Vavality';
$pass = 'T635060r';
//mixed mysqli::query (string $query [ , int $Resultmode = MYSQLI_STORE_RESULT])
//mixed mysqli_query(mysqli $link , string $query [, int $resultmade = MYSQLI_STORE_RESULT])
?>
<?php
require_once  'index.php';

$link = $link = mysqli_connect($host, $user, $pass, $bd_name)
    or die ("Ошибка " . mysqli_errno($link));

$query = "SELECT * FROM phones";
$result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_errno($link));
if($result)
{
    echo "Выполнение запроса прошло успешно ";
}
mysqli_close($link);


?>


