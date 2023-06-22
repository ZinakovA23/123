<html>
<head>
<meta chraset= "UTF-8">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
  <body>
  <nav>
  <ul class="topmenu">
    <li><a href="actsiya.php">акции</a></li>
    <li><a href="authandreg.html" class="dropbtn">Выход</a></li>
		<li><a href="akti priema-peredachi.php">акты приема-передачи</a></li>
    <li><a href="klienti.php">клиенты</a></li>
    <li><a href="sotrudniki.php">сотрудники</a></li>
    <li><a href="dogovor arendi.php">договоры аренды</a></li>
    <li><a href="nabor dokumentov.html">наборы документов</a></li>
  </ul>
</nav>
    
 <!-- __________________________________________________________________________________-->
  <div id="footer"> &copy; проект "Информационная система управления аренды легковых автомобилей". Создан студентами группы БВТ2151 Зинаков А.Ю и Полегенько.А Все права защищены(нет).</div>
  <input type="search" name="text" required placeholder="поиск по сайту" size="26" autocomplete="off" autofocus>
  <input type="submit" value="Найти">
    
    <h2> Таблица "Технический парк"</h2>
    
  <div class = 'ins\up\del'>
   <button class="dropbtn_2" ><a href="">добавление записи</li></button></a> 
   <button class="dropbtn_2" ><a href="remont park.php"> &#8594; ремонтный парк</a></button>
  <button class="dropbtn_2" ><a href="logini i paroli.php"> &#8592; Логины и пароли </a></button>
    </div>
    
  </body>
  </html>
  
  <?php
@mysql_connect('localhost','root','');
 
@mysql_select_db('PCRMIS');
 
$res = mysql_query("SELECT * FROM `technical_park` ORDER BY `ID` DESC") or die(mysql_error());
 
$text = '<table border="1"></th>
<th>ID</th>
<th>name_of_the_machine</th>
<th>type_of_machine</th>
<th>machine number</th>
<th>sostoyanie_machine</th>
<th>Dop_inform</th>
<th>delete</th>
<th>update</th></tr>';
while($row = mysql_fetch_assoc($res)) {
$text .= '<tr></tr><tr><td>'
.$row['ID'].'</td><td>'
.$row['name_of_the_machine'].'</td><td>'
.$row['type_of_machine'].'</td><td>'
.$row['machine number'].'</td><td>'
.$row['sostoyanie_machine'].'</td><td>'
.$row['Dop_inform'].'</td>
<td><a href= "delete_klient.php" >delete</a></td>
<td><a href= "update_klient.php" >update</a></td>
</tr>';
 
}

echo $text;
?>