<?php
$note_id = $_GET['note'];
$link = mysqli_connect("localhost","root", "", "PCRMIS"); 
$query = "SELECT * FROM `akti_priema_peredachi` 
WHERE `ID`='$ID'";
$result = mysqli_query($link, $query);
$edit_note = mysqli_fetch_array($result);
?>
<html>
<body>
<p style="position:left:0;top:0;margin-top:0">
<a href="akti priema-peredachi.php" target="data">Назад</a></p>

<form id="editnote" name="editnote" method="post" >
<label for="ID">ID: </label>
<input type="int" name="ID" 
value = "<?php echo $edit_note['ID'];?>" /><br><br>

<label for="Nomer_dogovora">Nomer_dogovora: </label>
<input type="int" name="Nomer_dogovora" 
value = "<?php echo $edit_note['Nomer_dogovora'];?>" /><br><br>

<label for="Data_zakluch_dogovora">Data_zakluch_dogovora: </label>
<input type="date" name="Data_zakluch_dogovora" 
value = "<?php echo $edit_note['Data_zakluch_dogovora'];?>" /><br><br>

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
$Nomer_dogovora = $_POST['Nomer_dogovora'];
$Data_zakluch_dogovora = $_POST['Data_zakluch_dogovora'];
$Dop_inform = $_POST['Dop_inform'];


$update_query = "UPDATE `akti_priema_peredachi` SET `ID` = '$ID',`Nomer_dogovora`='$Nomer_dogovora',`Data_zakluch_dogovora`='$Data_zakluch_dogovora',
 `Dop_inform`='$Dop_inform' WHERE `ID` = '$ID';";
$update_result = mysqli_query ($link, $update_query) or die("Ошибка " . mysqli_error($link));
'<br>'."Успешно изменено!";
}
?>
</body>
</html>