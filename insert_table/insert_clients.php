<html>
<body>
<p style="position:left:0;top:0;margin-top:0">
<a href="klienti.php" target="data">Назад</a></p>
<p>Введите данные в форму.</p>
<form id="newnote" name="newnote" method="post" action="">

<label for="status">ID: </label>
<input type="int" name="ID"/><br><br>

<label for="status">FIO </label>
<input type="string" name="FIO"/><br><br>

<label for="status">Pochta: </label>
<input type="string" name="Pochta"/><br><br>

<label for="status">Aktsiya: </label>
<input type="string" name="aktsiya"/><br><br>

<label for="status">Nomer_loyal_karti: </label>
<input type="int" name="Nomer_loyal_karti"/><br><br>

<label for="status">Nomer_fin_karti: </label>
<input type="int" name="Nomer_fin_karti"/><br><br>

<label for="status">dop_inform: </label>
<input type="string" name="dop_inform"/><br><br>

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
$FIO = $_POST['FIO'];
$Pochta = $_POST['Pochta'];
$Aktsiya = $_POST['Aktsiya'];
$Nomer_loyal_karti = $_POST['Nomer_loyal_karti'];
$Nomer_fin_karti = $_POST['Nomer_fin_karti'];
$dop_inform = $_POST['dop_inform'];

$query = "INSERT INTO `clients`(`ID`,`FIO`,`Pochta`, `Aktsiya`, `Nomer_loyal_karti`, `Nomer_fin_karti`, `dop_inform`) 
VALUES('$ID','$FIO','$Pochta', '$Aktsiya', '$Nomer_loyal_karti', '$Nomer_fin_karti', '$dop_inform');";
$update_result = mysqli_query ($link, $query) or die("Ошибка " . mysqli_error($link));
echo '<br>'."Успешно добавлено!";
}
?>