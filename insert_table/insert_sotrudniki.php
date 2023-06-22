 <html>
<body>
<p style="position:left:0;top:0;margin-top:0">
<a href="sotrudniki park.php" target="data">Назад</a></p>
<p>Введите данные в форму.</p>
<form id="newnote" name="newnote" method="post" action="">

<label for="status">ID: </label>
<input type="int" name="ID"/><br><br>

<label for="status">FIO </label>
<input type="string" name="FIO"/><br><br>

<label for="status">Doljnost: </label>
<input type="string" name="Doljnost"/><br><br>

<label for="status">Nomer_trud_dogovor: </label>
<input type="int" name="Nomer_trud_dogovor"/><br><br>

<label for="status">Nomer_pasporta: </label>
<input type="int" name="Nomer_pasporta"/><br><br>

<label for="status">Seriya_pasporta: </label>
<input type="int" name="Seriya_pasporta"/><br><br>

<label for="status">Data_priema: </label>
<input type="date" name="Data_priema"/><br><br>

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
$Doljnost = $_POST['Doljnost'];
$Nomer_trud_dogovor = $_POST['Nomer_trud_dogovor'];
$Nomer_pasporta = $_POST['Nomer_pasporta'];
$Seriya_pasporta = $_POST['Seriya_pasporta'];
$Data_priema = $_POST['Data_priema'];

$query = "INSERT INTO `repair_park`(`ID`,`FIO`,`Doljnost`, `Nomer_trud_dogovor`, `Nomer_pasporta`, `Seriya_pasporta`, `Data_priema`) 
VALUES('$ID','$FIO','$Doljnost', '$Nomer_trud_dogovor', '$Nomer_pasporta', '$Seriya_pasporta', '$Data_priema');";
$update_result = mysqli_query ($link, $query) or die("Ошибка " . mysqli_error($link));
echo '<br>'."Успешно добавлено!";
}