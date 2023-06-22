<?php
$note_id = $_GET['note'];
$link = mysqli_connect("localhost","root", "", "PCRMIS"); 
$query = "SELECT * FROM `clients` 
WHERE `ID`='$ID'";
$result = mysqli_query($link, $query);
$edit_note = mysqli_fetch_array($result);
?>
<html>
<body>
<p style="position:left:0;top:0;margin-top:0">
<a href="logini i paroli.php" target="data">Назад</a></p>

<form id="editnote" name="editnote" method="post" >
<label for="ID">ID: </label>
<input type="int" name="ID" 
value = "<?php echo $edit_note['ID'];?>" /><br><br>

<label for="FIO">FIO: </label>
<input type="string" name="FIO" 
value = "<?php echo $edit_note['FIO'];?>" /><br><br>

<label for="Pochta">Pochta: </label>
<input type="string" name="Pochta" 
value = "<?php echo $edit_note['Pochta'];?>" /><br><br>

<label for="Aktsiya">Aktsiya: </label>
<input type="string" name="Aktsiya" 
value = "<?php echo $edit_note['Aktsiya'];?>" /><br><br>

<label for="Nomer_loyal_karti">Nomer_loyal_karti: </label>
<input type="int" name="Nomer_loyal_karti" 
value = "<?php echo $edit_note['Nomer_loyal_karti'];?>" /><br><br>

<label for="Nomer_fin_karti">Nomer_fin_karti: </label>
<input type="int" name="Nomer_fin_karti" 
value = "<?php echo $edit_note['Nomer_fin_karti'];?>" /><br><br>

<label for="dop_inform">dop_inform: </label>
<input type="string" name="dop_inform" 
value = "<?php echo $edit_note['dop_inform'];?>" /><br><br>


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
$Pochta = $_POST['Pochta'];
$Aktsiya = $_POST['Aktsiya'];
$Nomer_loyal_karti = $_POST['Nomer_loyal_karti'];
$Nomer_fin_karti = $_POST['Nomer_fin_karti'];
$dop_inform = $_POST['dop_inform'];

$update_query = "UPDATE `clients` SET `ID` = '$ID',`FIO`='$FIO',`Pochta`='$Pochta',
`Aktsiya`='$Aktsiya', `Nomer_loyal_karti`='$Nomer_loyal_karti', `Nomer_fin_karti`='$Nomer_fin_karti', `dop_inform`='$dop_inform'
 WHERE `ID` = '$ID';";
$update_result = mysqli_query ($link, $update_query) or die("Ошибка " . mysqli_error($link));
'<br>'."Успешно изменено!";
}
?>
</body>
</html>