<html>
<body>
<p style="position:left:0;top:0;margin-top:0">
<a href="akti priema-peredachi.php" target="data">Назад</a></p>
<p>Введите данные в форму.</p>
<form id="newnote" name="newnote" method="post" action="">

<label for="status">ID: </label>
<input type="int" name="ID"/><br><br>

<label for="status">Nomer_dogovora </label>
<input type="int" name="Nomer_dogovora"/><br><br>

<label for="status">FIO_client: </label>
<input type="string" name="FIO_client"/><br><br>

<label for="status">FIO_sotrudnika: </label>
<input type="string" name="FIO_sotrudnika"/><br><br>

<label for="status">Data_zakluch_dogovora: </label>
<input type="date" name="Data_zakluch_dogovora"/><br><br>

<label for="status">Dop_inform: </label>
<input type="string" name="Dop_inform"/><br><br>

<input type="submit" name="submit" id="submit" value="ОК"/>
</form>
</body>
</html>
<?php
//Подключение к серверу
$link = mysqli_connect("localhost","root", "", "PCRMIS");
//ВыборБД
$select_db = mysqli_select_db ($link, $db);
//Получение данных из формы
$submit = $_POST['submit'];
if ($submit)
{
$ID = $_POST['ID'];
$Nomer_dogovora = $_POST['Nomer_dogovora'];
$FIO_client = $_POST['FIO_client'];
$FIO_sotrudnika = $_POST['FIO_sotrudnika'];
$Data_zakluch_dogovora = $_POST['Data_zakluch_dogovora'];
$Dop_inform = $_POST['Dop_inform'];

$query = "INSERT INTO `akti_priema_peredachi`(`ID`,`Nomer_dogovora`,`FIO_client`, `FIO_sotrudnika`, `Data_zakluch_dogovora`, `Dop_inform`) 
VALUES('$ID','$Nomer_dogovora','$FIO_client', '$FIO_sotrudnika', '$Data_zakluch_dogovora', '$Dop_inform');";
$update_result = mysqli_query ($link, $query) or die("Ошибка " . mysqli_error($link));
echo '<br>'."Успешно добавлено!";
}
?>