<html>
<head>
<meta chraset= "UTF-8">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
  <body>
  <nav>
  <ul class="topmenu">
		<li><a href="">ремонтный парк</a></li>
    <li><a href="" class="dropbtn">Выход</a></li>
		<li><a href="">акты приема-передачи</a></li>
    <li><a href="">клиенты</a></li>
    <li><a href="">сотрудники</a></li>
    <li><a href="">договоры аренды</a></li>
    <li><a href="">наборы документов</a></li>
  </ul>
</nav>
    
 <!-- __________________________________________________________________________________-->
  <div id="footer"> &copy; проект "Информационная система управления аренды легковых автомобилей". Создан студентами группы БВТ2151 Зинаков А.Ю и Полегенько.А Все права защищены(нет).</div>
  <input type="search" name="text" required placeholder="поиск по сайту" size="26" autocomplete="off" autofocus>
  <input type="submit" value="Найти">
    
    <h2> Таблица "Логины и пароли"</h2>
    
  <div class = 'ins\up\del'>
   <button class="dropbtn_2" ><a href="">добавление записи</li></button></a> 
   <button class="dropbtn_2" ><a href="tech park.php"> &#8594; Технический парк</a></button>
  <button class="dropbtn_2" ><a href="actsiya.php"> &#8592; акции </a></button>
    </div>
    
  </body>
  </html>
  
  <?php
@mysql_connect('localhost','root','');
 
@mysql_select_db('PCRMIS');
 
$res = mysql_query("SELECT * FROM `login_password_card` ORDER BY `ID_bage` DESC") or die(mysql_error());
 
$text = '<table border="1"></th>
<th>ID_bage</th>
<th>FIO</th>
<th>login</th>
<th>password</th>
<th>delete</th>
<th>update</th></tr>';
while($row = mysql_fetch_assoc($res)) {
$text .= '<tr></tr><tr><td>'
.$row['ID_bage'].'</td><td>'
.$row['FIO'].'</td><td>'
.$row['login'].'</td><td>'
.$row['password'].'</td>
<td><a href= "delete_klient.php" >delete</a></td>
<td><a href= "update_klient.php" >update</a></td>
</tr>';
 
}

echo $text;
?>