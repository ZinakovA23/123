<?php
$note_id = $_GET['note'];
$link = mysqli_connect("localhost","root", "", "PCRMIS"); 
$query = "SELECT * FROM `dogovor_arendi` 
WHERE `ID`='$ID'";
$result = mysqli_query($link, $query);
$edit_note = mysqli_fetch_array($result);
?>
<html>
<body>
<p style="position:left:0;top:0;margin-top:0">
<a href="dogovor arendi.php" target="data">Назад</a></p>

<form id="editnote" name="editnote" method="post" >
<label for="ID">ID: </label>
<input type="int" name="ID" 
value = "<?php echo $edit_note['ID'];?>" /><br><br>

<label for="Nomer_dogovora">Nomer_dogovora: </label>
<input type="int" name="Nomer_dogovora" 
value = "<?php echo $edit_note['Nomer_dogovora'];?>" /><br><br>

<label for="Seriya_pasport">Seriya_pasport: </label>
<input type="int" name="Seriya_pasport" 
value = "<?php echo $edit_note['Seriya_pasport'];?>" /><br><br>

<label for="Nomer_pasport">Nomer_pasport: </label>
<input type="int" name="Nomer_pasport" 
value = "<?php echo $edit_note['Nomer_pasport'];?>" /><br><br>

<label for="Seriya_driver_card">Seriya_driver_card: </label>
<input type="int" name="Seriya_driver_card" 
value = "<?php echo $edit_note['Seriya_driver_card'];?>" /><br><br>


<label for="Number_driver_card">Number_driver_card: </label>
<input type="int" name="Number_driver_card" 
value = "<?php echo $edit_note['Number_driver_card'];?>" /><br><br>

<label for="Date1">Date1: </label>
<input type="date" name="Date1" 
value = "<?php echo $edit_note['Date1'];?>" /><br><br>

<label for="Date2">Date2: </label>
<input type="date" name="Date2" 
value = "<?php echo $edit_note['Date2'];?>" /><br><br>

<label for="Inform">Inform: </label>
<input type="string" name="Inform" 
value = "<?php echo $edit_note['Inform'];?>" /><br><br>

<label for="type_uslugi">type_uslugi: </label>
<input type="string" name="type_uslugi" 
value = "<?php echo $edit_note['type_uslugi'];?>" /><br><br>

<label for="Summa">Summa: </label>
<input type="int" name="Summa" 
value = "<?php echo $edit_note['Summa'];?>" /><br><br>

<label for="Nazvanie_transporta">Nazvanie_transporta: </label>
<input type="string" name="Nazvanie_transporta" 
value = "<?php echo $edit_note['Nazvanie_transporta'];?>" /><br><br>

<input type="submit" name="submit" id="submit" value="Изменить" />
</form>
</body>
</html>
<?php
$submit = $_POST['submit'];
if ($submit)
{
$ID = $_POST['ID'];
$Nomer_dogovora = $_POST['Nomer_dogovora'];
$Nomer_pasport = $_POST['Nomer_pasport'];
$Seriya_driver_card = $_POST['Seriya_driver_card'];
$Number_driver_card = $_POST['Number_driver_card'];
$Date1 = $_POST['Date1'];
$Date2 = $_POST['Date2'];
$Inform = $_POST['Inform'];
$type_uslugi = $_POST['type_uslugi'];
$Summa = $_POST['Summa'];
$Nazvanie_transporta = $_POST['Nazvanie_transporta'];

$update_query = "UPDATE `dogovor_arendi` SET `ID` = '$ID',`Nomer_dogovora`='$Nomer_dogovora',`Nomer_pasport`='$Nomer_pasport', 
`Seriya_driver_card`='$Seriya_driver_card', 
`Number_driver_card`='$Number_driver_card', `Date1`='$Date1', `Date2`='$Date2', 
`Inform`='$Inform', `type_uslugi`='$type_uslugi', `Summa`='$Summa', `Nazvanie_transporta`='$Nazvanie_transporta'
WHERE `ID` = '$ID';";
$update_result = mysqli_query ($link, $update_query) or die("Ошибка " . mysqli_error($link));
'<br>'."Успешно изменено!";
}
?>
</body>
</html>