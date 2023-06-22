<?php
$note_id = $_GET['note'];
$link = mysqli_connect("localhost","root", "", "PCRMIS"); 
$query = "SELECT * FROM `technical_park` 
WHERE `ID`='$ID'";
$result = mysqli_query($link, $query);
$edit_note = mysqli_fetch_array($result);
?>
<html>
<body>
<p style="position:left:0;top:0;margin-top:0">
<a href="remont park.php" target="data">Назад</a></p>

<form id="editnote" name="editnote" method="post" >

<label for="ID">ID: </label>
<input type="int" name="ID" 
value = "<?php echo $edit_note['ID'];?>" /><br><br>

<label for="name_of_the_machine">name_of_the_machine: </label>
<input type="string" name="name_of_the_machine" 
value = "<?php echo $edit_note['name_of_the_machine'];?>" /><br><br>

<label for="type_of_machine">type_of_machine: </label>
<input type="string" name="type_of_machine" 
value = "<?php echo $edit_note['type_of_machine'];?>" /><br><br>

<label for="machine_number">machine_number: </label>
<input type="int" name="machine_number" 
value = "<?php echo $edit_note['machine_number'];?>" /><br><br>

<label for="sostoyanie_machine">sostoyanie_machine: </label>
<input type="string" name="sostoyanie_machine" 
value = "<?php echo $edit_note['sostoyanie_machine'];?>" /><br><br>

<label for="Dop_inform">Dop_inform: </label>
<input type="string" name="Dop_inform" 
value = "<?php echo $edit_note['Dop_inform'];?>" /><br><br>

<input type="submit" name="submit" id="submit" value="Изменить" />
</form>
</body>
</html>
<?php
$submit = $_POST['submit'];
if ($submit)
{
$ID = $_POST['ID'];
$name_of_the_machine = $_POST['name_of_the_machine'];
$type_of_machine = $_POST['type_of_machine'];
$machine_number = $_POST['machine_number'];
$sostoyanie_machine = $_POST['sostoyanie_machine'];
$Dop_inform = $_POST['Dop_inform'];


$update_query = "UPDATE `technical_park` SET `ID` = '$ID',`name_of_the_machine`='$name_of_the_machine',
`type_of_machine`='$type_of_machine', `machine_number`='$machine_number', `sostoyanie_machine`='$sostoyanie_machine', `Dop_inform`='$Dop_inform'  WHERE `ID` = '$ID';";
$update_result = mysqli_query ($link, $update_query) or die("Ошибка " . mysqli_error($link));
'<br>'."Успешно изменено!";
}
?>
</body>
</html>