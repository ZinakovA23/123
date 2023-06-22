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
		<li><a href="">акты приема-передачи</a></li>
    <li><a href="">клиенты</a></li>
  </ul>
</nav>
    
 <!-- __________________________________________________________________________________-->
  <div id="footer"> &copy; проект "Информационная система управления аренды легковых автомобилей". Создан студентами группы БВТ2151 Зинаков А.Ю и Полегенько.А Все права защищены(нет).</div>
  <input type="search" name="text" required placeholder="поиск по сайту" size="26" autocomplete="off" autofocus>
  <input type="submit" value="Найти">
    
    <h2> Таблица "договоры аренды"</h2>
    
  <div class = 'ins\up\del'>
   <button class="dropbtn_2" ><a href="">добавление записи</li></button></a> 
   <button class="dropbtn_2" ><a href="nabor dokumentov.html"> &#8594; наборы документов</a></button>
  <button class="dropbtn_2" ><a href="sotrudniki.php"> &#8592; сотрудники </a></button>
    </div>
    
  </body>
  </html>
  
  <?php
@mysql_connect('localhost','root','');
 
@mysql_select_db('PCRMIS');
 
$res = mysql_query("SELECT * FROM `dogovor_arendi` ORDER BY `ID` DESC") or die(mysql_error());
 
$text = '<table border="1"></th>
<th>ID</th>
<th>Nomer_dogovora</th>
<th>FIO_client</th>
<th>Seriya_pasporta</th>
<th>Nomer_pasporta</th>
<th>Seriya_driver_card</th>
<th>Number_driver_card</th>
<th>Date1</th>
<th>Date2</th>
<th>inform</th>
<th>type_uslugi</th>
<th>Summa</th>
<th>Nazvanie_transporta</th>
<th>vremya_okonchaniya_dogovora</th>
<th>delete</th>
<th>update</th></tr>';
while($row = mysql_fetch_assoc($res)) {
$text .= '<tr></tr><tr><td>'
.$row['ID'].'</td><td>'
.$row['Nomer_dogovora'].'</td><td>'
.$row['FIO_client'].'</td><td>'
.$row['Seriya_pasporta'].'</td><td>'
.$row['Nomer_pasporta'].'</td><td>'
.$row['Seriya_driver_card'].'</td><td>'
.$row['Number_driver_card'].'</td><td>'
.$row['Date1'].'</td><td>'
.$row['Date2'].'</td><td>'
.$row['inform'].'</td><td>'
.$row['type_uslugi'].'</td><td>'
.$row['Summa'].'</td><td>'
.$row['Nazvanie_transporta'].'</td><td>'
.$row['vremya_okonchaniya_dogovora'].'</td>
<td><a href= "delete_klient.php" >delete</a></td>
<td><a href= "update_klient.php" >update</a></td>
</tr>';
 
}

echo $text;
?>