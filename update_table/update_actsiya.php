<?php
$note_id = $_GET['note'];
$link = mysqli_connect("localhost","root", "", "PCRMIS"); 
$query = "SELECT * FROM `actsiya` 
WHERE `ID`='$ID'";
$result = mysqli_query($link, $query);
$edit_note = mysqli_fetch_array($result);
?>
<html>
<body>
<p style="position:left:0;top:0;margin-top:0">
<a href="actsiya.php" target="data">Назад</a></p>

<form id="editnote" name="editnote" method="post" >
<label for="ID">ID: </label>
<input type="int" name="ID" 
value = "<?php echo $edit_note['ID'];?>" /><br><br>

<label for="Nazvanie">Nazvanie: </label>
<input type="string" name="Nazvanie" 
value = "<?php echo $edit_note['Nazvanie'];?>" /><br><br>

<label for="opisanie">opisanie: </label>
<input type="string" name="opisanie" 
value = "<?php echo $edit_note['opisanie'];?>" /><br><br>

<label for="usloviya_polucheniya">usloviya_polucheniya: </label>
<input type="string" name="usloviya_polucheniya" 
value = "<?php echo $edit_note['usloviya_polucheniya'];?>" /><br><br>

<label for="data_starta">data_starta: </label>
<input type="date" name="data_starta" 
value = "<?php echo $edit_note['data_starta'];?>" /><br><br>

<label for="Data_oconchaniya">Data_oconchaniya: </label>
<input type="date" name="Data_oconchaniya" 
value = "<?php echo $edit_note['Data_oconchaniya'];?>" /><br><br>

<label for="Nalichie_card">Nalichie_card: </label>
<input type="string" name="Nalichie_card" 
value = "<?php echo $edit_note['Nalichie_card'];?>" /><br><br>

<input type="submit" name="submit" id="submit" value="Изменить" />
</form>
</body>
</html>
<?php
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


$update_query = "UPDATE `actsiya` SET `ID` = '$ID',`Nazvanie`='$Nazvanie',`opisanie`='$opisanie', 
`usloviya_polucheniya`='$usloviya_polucheniya', 
`data_starta`='$data_starta', `Data_oconchaniya`='$Data_oconchaniya', `Nalichie_card`='$Nalichie_card' WHERE `ID` = '$ID';";
$update_result = mysqli_query ($link, $update_query) or die("Ошибка " . mysqli_error($link));
'<br>'."Успешно изменено!";
}
?>
</body>
</html>