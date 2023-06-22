<html>
<head>
<meta chraset= "UTF-8">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
  <body>
  <nav>
  <ul class="topmenu">
    <li><a href="">акции</a></li>
    <li><a href="">Логины и пароли</a></li>
    <li><a href="">Технический парк</a></li>
		<li><a href="">ремонтный парк</a></li>
    <li><a href="" class="dropbtn">Выход</a></li>
    <li><a href="">договоры аренды</a></li>
    <li><a href="">наборы документов</a></li>
  </ul>
</nav>
    
 <!-- __________________________________________________________________________________-->
  <div id="footer"> &copy; проект "Информационная система управления аренды легковых автомобилей". Создан студентами группы БВТ2151 Зинаков А.Ю и Полегенько.А Все права защищены(нет).</div>
  <input type="search" name="text" required placeholder="поиск по сайту" size="26" autocomplete="off" autofocus>
  <input type="submit" value="Найти">
    
    <h2> Таблица "клиенты"</h2>
    
  <div class = 'ins\up\del'>
   <button class="dropbtn_2" ><a href="">добавление записи</li></button></a> 
   <button class="dropbtn_2" ><a href="sotrudniki.php"> &#8594; сотрудники</a></button>
  <button class="dropbtn_2" ><a href="akti priema-peredachi.php"> &#8592; акты приема-передачи </a></button>
    </div>
    
  </body>
  </html>
  
  <?php
@mysql_connect('localhost','root','');
 
@mysql_select_db('PCRMIS');
 
$res = mysql_query("SELECT * FROM `clients` ORDER BY `ID` DESC") or die(mysql_error());
 
$text = '<table border="1"></th>
<th>ID</th>
<th>FIO</th>
<th>Pochta</th>
<th>Aktsiya</th>
<th>Nomer_loyal_karti</th>
<th>Nomer_fin_karti</th>
<th>dop_inform</th>
<th>delete</th>
<th>update</th></tr>';
while($row = mysql_fetch_assoc($res)) {
$text .= '<tr></tr><tr><td>'
.$row['ID'].'</td><td>'
.$row['FIO'].'</td><td>'
.$row['Pochta'].'</td><td>'
.$row['Aktsiya'].'</td><td>'
.$row['Nomer_loyal_karti'].'</td><td>'
.$row['Nomer_fin_karti'].'</td><td>'
.$row['dop_inform'].'</td>
<td><a href= "delete_klient.php" >delete</a></td>
<td><a href= "update_klient.php" >update</a></td>
</tr>';
 
}

echo $text;
?>