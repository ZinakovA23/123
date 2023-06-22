<html>
<body>
<p style="position:left:0;top:0;margin-top:0">
<a href="remont park.php" target="data">Назад</a></p>
<p>Введите данные в форму.</p>
<form id="newnote" name="newnote" method="post" action="">

<label for="status">ID: </label>
<input type="int" name="ID"/><br><br>

<label for="status">name_of_the_machine </label>
<input type="string" name="name_of_the_machine"/><br><br>

<label for="status">type_of_machine: </label>
<input type="string" name="type_of_machine"/><br><br>

<label for="status">machine_number: </label>
<input type="int" name="machine_number"/><br><br>

<label for="status">sostoyanie_machine: </label>
<input type="string" name="sostoyanie_machine"/><br><br>

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
$name_of_the_machine = $_POST['name_of_the_machine'];
$type_of_machine = $_POST['type_of_machine'];
$machine_number = $_POST['machine_number'];
$sostoyanie_machine = $_POST['sostoyanie_machine'];
$Dop_inform = $_POST['Dop_inform'];


$query = "INSERT INTO `technical_park`(`ID`,`name_of_the_machine`,`type_of_machine`, `machine_number`, `sostoyanie_machine`, `Dop_inform`) 
VALUES('$ID','$name_of_the_machine','$type_of_machine', '$machine_number', '$sostoyanie_machine', '$Dop_inform');";
$update_result = mysqli_query ($link, $query) or die("Ошибка " . mysqli_error($link));
echo '<br>'."Успешно добавлено!";
}