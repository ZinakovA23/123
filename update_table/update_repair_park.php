<?php
$note_id = $_GET['note'];
$link = mysqli_connect("localhost","root", "", "PCRMIS"); 
$query = "SELECT * FROM `repair_park` 
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

<label for="Status">Status: </label>
<input type="string" name="Status" 
value = "<?php echo $edit_note['Status'];?>" /><br><br>

<label for="Neispravnost">Neispravnost: </label>
<input type="string" name="Neispravnost" 
value = "<?php echo $edit_note['Neispravnost'];?>" /><br><br>

<label for="Data_Nachala_ustraneniya">Data_Nachala_ustraneniya: </label>
<input type="date" name="Data_Nachala_ustraneniya" 
value = "<?php echo $edit_note['Data_Nachala_ustraneniya'];?>" /><br><br>

<label for="Data_oconchaniya_ustraneniya">Data_oconchaniya_ustraneniya: </label>
<input type="date" name="Data_oconchaniya_ustraneniya" 
value = "<?php echo $edit_note['Data_oconchaniya_ustraneniya'];?>" /><br><br>



<input type="submit" name="submit" id="submit" value="Изменить" />
</form>
</body>
</html>
<?php
$submit = $_POST['submit'];
if ($submit)
{
$ID = $_POST['ID'];
$Status = $_POST['Status'];
$Neispravnost = $_POST['Neispravnost'];
$Data_Nachala_ustraneniya = $_POST['Data_Nachala_ustraneniya'];
$Data_oconchaniya_ustraneniya = $_POST['Data_oconchaniya_ustraneniya'];


$update_query = "UPDATE `repair_park` SET `ID` = '$ID',`Status`='$Status',
`Neispravnost`='$Neispravnost', `Data_Nachala_ustraneniya`='$Data_Nachala_ustraneniya', `Data_oconchaniya_ustraneniya`='$Data_oconchaniya_ustraneniya'  WHERE `ID` = '$ID';";
$update_result = mysqli_query ($link, $update_query) or die("Ошибка " . mysqli_error($link));
'<br>'."Успешно изменено!";
}
?>
</body>
</html>