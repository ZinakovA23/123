<?php
$note_id = $_GET['note'];
$link = mysqli_connect("localhost","root", "", "PCRMIS"); 
$query = "SELECT * FROM `login_passord_card` 
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

<label for="login">login: </label>
<input type="string" name="login" 
value = "<?php echo $edit_note['login'];?>" /><br><br>

<label for="password">password: </label>
<input type="int" name="password" 
value = "<?php echo $edit_note['password'];?>" /><br><br>


<input type="submit" name="submit" id="submit" value="Изменить" />
</form>
</body>
</html>
<?php
$submit = $_POST['submit'];
if ($submit)
{
$ID = $_POST['ID'];
$login = $_POST['login'];
$password = $_POST['password'];


$update_query = "UPDATE `login_passord_card` SET `ID` = '$ID',`login`='$login',`password`='$password', 
 WHERE `ID` = '$ID';";
$update_result = mysqli_query ($link, $update_query) or die("Ошибка " . mysqli_error($link));
'<br>'."Успешно изменено!";
}
?>
</body>
</html>