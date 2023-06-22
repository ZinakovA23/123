<?php
$note_id = $_GET['note'];
$link = mysqli_connect("localhost","root", "", "PCRMIS"); 
$query = "SELECT * FROM `sotrudniki` 
WHERE `ID`='$ID'";
$result = mysqli_query($link, $query);
$edit_note = mysqli_fetch_array($result);
?>
<html>
<body>
<p style="position:left:0;top:0;margin-top:0">
<a href="sotrudniki.php" target="data">Назад</a></p>

<form id="editnote" name="editnote" method="post" >

<label for="ID">ID: </label>
<input type="int" name="ID" 
value = "<?php echo $edit_note['ID'];?>" /><br><br>

<label for="FIO">FIO: </label>
<input type="int" name="FIO" 
value = "<?php echo $edit_note['FIO'];?>" /><br><br>

<label for="Doljnost">Doljnost: </label>
<input type="int" name="Doljnost" 
value = "<?php echo $edit_note['Doljnost'];?>" /><br><br>

<label for="Nomer_trud_dogovora">Nomer_trud_dogovora: </label>
<input type="int" name="Nomer_trud_dogovora" 
value = "<?php echo $edit_note['Nomer_trud_dogovora'];?>" /><br><br>

<label for="Nomer_pasporta">Nomer_pasporta: </label>
<input type="int" name="Nomer_pasporta" 
value = "<?php echo $edit_note['Nomer_pasporta'];?>" /><br><br>

<label for="Seriya_pasporta">Seriya_pasporta: </label>
<input type="int" name="Seriya_pasporta" 
value = "<?php echo $edit_note['Seriya_pasporta'];?>" /><br><br>

<label for="Data_priema">Data_priema: </label>
<input type="date" name="Data_priema" 
value = "<?php echo $edit_note['Data_priema'];?>" /><br><br>

<input type="submit" name="submit" id="submit" value="Изменить" />
</form>
</body>
</html>
<?php
$submit = $_POST['submit'];
if ($submit)
{
$ID = $_POST['ID'];
$FIO = $_POST['FIO'];
$Doljnost = $_POST['Doljnost'];
$Nomer_trud_dogovora = $_POST['Nomer_trud_dogovora'];
$Nomer_pasporta = $_POST['Nomer_pasporta'];
$Seriya_pasporta = $_POST['Seriya_pasporta'];
$Data_priema = $_POST['Data_priema'];


$update_query = "UPDATE `sotrudniki` SET `ID` = '$ID',`FIO`='$FIO',
`Doljnost`='$Doljnost', 
`Nomer_trud_dogovora`='$Nomer_trud_dogovora', `Nomer_pasporta`='$Nomer_pasporta', `Seriya_pasporta`='$Seriya_pasporta', 
`Data_priema`='$Data_priema'  WHERE `ID` = '$ID';";
$update_result = mysqli_query ($link, $update_query) or die("Ошибка " . mysqli_error($link));
'<br>'."Успешно изменено!";
}
?>
</body>
</html>