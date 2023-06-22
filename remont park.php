<html>
<head>
<meta chraset= "UTF-8">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
  <body>
  <nav>
  <ul class="topmenu">
    <li><a href="actsiya.php">акции</a></li>
    <li><a href="logini i paroli.php">Логины и пароли</a></li>
    <li><a href="authandreg.html" class="dropbtn">Выход</a></li>
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
    
    <h2> Таблица "ремонтный парк"</h2>
    
  <div class = 'ins\up\del'>
   <button class="dropbtn_2" ><a href="">добавление записи</li></button></a> 
   <button class="dropbtn_2" ><a href="akti priema-peredachi.php"> &#8594; акты приема-передачи</a></button>
  <button class="dropbtn_2" ><a href="tech park.php"> &#8592; Технический парк </a></button>
    </div>
    
  </body>
  </html>
  
    <?php
@mysql_connect('localhost','root','');
 
@mysql_select_db('PCRMIS');
 
$res = mysql_query("SELECT * FROM `repair_park` ORDER BY `ID` DESC") or die(mysql_error());
 
$text = '<table border="1"></th>
<th>ID</th>
<th>Number_car</th>
<th>Status</th>
<th>Neispravnost</th>
<th>Data_Nachala_ustraneniya</th>
<th>Data_oconchaniya_ustraneniya</th>
<th>Otvetstvenniy</th>
<th>delete</th>
<th>update</th></tr>';
while($row = mysql_fetch_assoc($res)) {
$text .= '<tr></tr><tr><td>'
.$row['ID'].'</td><td>'
.$row['Number_car'].'</td><td>'
.$row['Status'].'</td><td>'
.$row['Neispravnost'].'</td><td>'
.$row['Data_Nachala_ustraneniya'].'</td><td>'
.$row['Data_oconchaniya_ustraneniya'].'</td><td>'
.$row['Otvetstvenniy'].'</td>
<td><a href= "delete_klient.php" >delete</a></td>
<td><a href= "update_klient.php" >update</a></td>
</tr>';
 
}

echo $text;
?>