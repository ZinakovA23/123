<html>
<body>
<p style="position:left:0;top:0;margin-top:0">
<a href="remont park.php" target="data">Назад</a></p>
<p>Введите данные в форму.</p>
<form id="newnote" name="newnote" method="post" action="">

<label for="status">ID: </label>
<input type="int" name="ID"/><br><br>

<label for="status">Number_car </label>
<input type="int" name="Number_car"/><br><br>

<label for="status">Status: </label>
<input type="string" name="Status"/><br><br>

<label for="status">Neispravnost: </label>
<input type="string" name="Neispravnost"/><br><br>

<label for="status">Data_Nachala_ustraneniya: </label>
<input type="date" name="Data_Nachala_ustraneniya"/><br><br>

<label for="status">Data_oconchaniya_ustraneniya: </label>
<input type="date" name="Data_oconchaniya_ustraneniya"/><br><br>

<label for="status">Otvetstvenniy: </label>
<input type="string" name="Otvetstvenniy"/><br><br>

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
$Number_car = $_POST['Number_car'];
$Status = $_POST['Status'];
$Neispravnost = $_POST['Neispravnost'];
$Data_Nachala_ustraneniya = $_POST['Data_Nachala_ustraneniya'];
$Data_oconchaniya_ustraneniya = $_POST['Data_oconchaniya_ustraneniya'];
$Otvetstvenniy = $_POST['Otvetstvenniy'];

$query = "INSERT INTO `repair_park`(`ID`,`Number_car`,`Status`, `Neispravnost`, `Data_Nachala_ustraneniya`, `Data_oconchaniya_ustraneniya`, `Otvetstvenniy`) 
VALUES('$ID','$Number_car','$Status', '$Neispravnost', '$Data_Nachala_ustraneniya', '$Data_oconchaniya_ustraneniya', '$Otvetstvenniy');";
$update_result = mysqli_query ($link, $query) or die("Ошибка " . mysqli_error($link));
echo '<br>'."Успешно добавлено!";
}