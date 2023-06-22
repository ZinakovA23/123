<html>
<body>
<p style="position:left:0;top:0;margin-top:0">
<a href="actsiya.php" target="data">Назад</a></p>
<p>Введите данные в форму.</p>
<form id="newnote" name="newnote" method="post" action="">

<label for="status">ID: </label>
<input type="int" name="ID"/><br><br>

<label for="status">Nazvanie </label>
<input type="string" name="Nazvanie"/><br><br>

<label for="status">opisanie: </label>
<input type="string" name="opisanie"/><br><br>

<label for="status">usloviya_polucheniya: </label>
<input type="string" name="usloviya_polucheniya"/><br><br>

<label for="status">data_starta: </label>
<input type="date" name="data_starta"/><br><br>

<label for="status">Data_oconchaniya: </label>
<input type="date" name="Data_oconchaniya"/><br><br>

<label for="status">Nalichie_card: </label>
<input type="string" name="Nalichie_card"/><br><br>

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
$Nazvanie = $_POST['Nazvanie'];
$opisanie = $_POST['opisanie'];
$usloviya_polucheniya = $_POST['usloviya_polucheniya'];
$data_starta = $_POST['data_starta'];
$Data_oconchaniya = $_POST['Data_oconchaniya'];
$Nalichie_card = $_POST['Nalichie_card'];

$query = "INSERT INTO `actsiya`(`ID`,`Nazvanie`,`opisanie`, `usloviya_polucheniya`, `data_starta`, `Data_oconchaniya`, `Nalichie_card`) 
VALUES('$ID','$Nazvanie','$opisanie', '$usloviya_polucheniya', '$data_starta', '$Data_oconchaniya', '$Nalichie_card');";
$update_result = mysqli_query ($link, $query) or die("Ошибка " . mysqli_error($link));
echo '<br>'."Успешно добавлено!";
}
?>