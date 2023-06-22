<html>
<body>
<p style="position:left:0;top:0;margin-top:0">
<a href="dogovor arendi.php" target="data">Назад</a></p>
<p>Введите данные в форму.</p>
<form id="newnote" name="newnote" method="post" action="">

<label for="status">ID: </label>
<input type="int" name="ID"/><br><br>

<label for="status">Nomer_dogovora </label>
<input type="int" name="Nomer_dogovora"/><br><br>

<label for="status">FIO_client: </label>
<input type="string" name="FIO_client"/><br><br>

<label for="status">Seriya_pasport: </label>
<input type="int" name="Seriya_passport"/><br><br>

<label for="status">Seriya_driver_card: </label>
<input type="int" name="Seriya_driver_card"/><br><br>

<label for="status">Number_driver_card: </label>
<input type="int" name="Number_driver_card"/><br><br>

<label for="status">Date1: </label>
<input type="date" name="Date1"/><br><br>

<label for="status">Date2: </label>
<input type="date" name="Date2"/><br><br>

<label for="status">Inform: </label>
<input type="string" name="Inform"/><br><br>

<label for="status">type_uslugi: </label>
<input type="string" name="type_uslugi"/><br><br>

<label for="status">Summa:</label>
<input type="int" name="Summa"/><br><br>

<label for="status">Nazvanie_transporta:</label>
<input type="string" name="Nazvanie_transporta"/><br><br>

<label for="status">vremya_okonchaniya_dogovora </label>
<input type="int" name="vremya_okonchaniya_dogovora"/><br><br>

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
$Seriya_pasport = $_POST['Seriya_pasport'];
$Seriya_driver_card = $_POST['Seriya_driver_card'];
$Number_driver_card = $_POST['Number_driver_card'];
$Date1 = $_POST['Date1'];
$Date2 = $_POST['Date2'];
$Inform = $_POST['Inform'];
$type_uslugi = $_POST['type_uslugi'];
$Summa = $_POST['Summa'];
$Nazvanie_transporta = $_POST['Nazvanie_transporta'];
$vremya_okonchaniya_dogovora = $_POST['vremya_okonchaniya_dogovora'];

$query = "INSERT INTO `dogovor_arendi`(`ID`,`Nomer_dogovora`,`FIO_client`, `Seriya_pasport`, `Seriya_driver_card`, `Number_driver_card`, `Date1`, `Date2`, `Inform`, `type_uslugi`, `Summa`, `Nazvanie_transporta`, `vremya_okonchaniya_dogovora`) 
VALUES('$ID','$Nomer_dogovora','$FIO_client', '$Seriya_pasport', '$Seriya_driver_card', '$Number_driver_card', '$Date1', '$Date2', '$Inform', '$type_uslugi', '$Summa', '$Nazvanie_transporta', '$vremya_okonchaniya_dogovora');";
$update_result = mysqli_query ($link, $query) or die("Ошибка " . mysqli_error($link));
echo '<br>'."Успешно добавлено!";
}
?>