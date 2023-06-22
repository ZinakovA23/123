<html>
<head>
<meta chraset= "UTF-8">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
  <body>
  <nav>
  <ul class="topmenu">
    <li><a href="">Технический парк</a></li>
		<li><a href="">ремонтный парк</a></li>
    <li><a href="" class="dropbtn">Выход</a></li>
		<li><a href="">акты приема-передачи</a></li>
    <li><a href="">клиенты</a></li>
    <li><a href="">сотрудники</a></li>
    <li><a href="">договоры аренды</a></li>
  </ul>
</nav>
    
 <!-- __________________________________________________________________________________-->
  <div id="footer"> &copy; проект "Информационная система управления аренды легковых автомобилей". Создан студентами группы БВТ2151 Зинаков А.Ю и Полегенько.А Все права защищены(нет).</div>
  <input type="search" name="text" required placeholder="поиск по сайту" size="26" autocomplete="off" autofocus>
  <input type="submit" value="Найти">
    
    <h2> Таблица "акции"</h2>
    
  <div class = 'ins\up\del'>
   <button class="dropbtn_2" ><a href="">добавление записи</li></button></a> 
   <button class="dropbtn_2" ><a href="logini i paroli.php"> &#8594; Логины и пароли</a></button>
  <button class="dropbtn_2" ><a href="nabor dokumentov.html"> &#8592; наборы документов </a></button>
    </div>


  </body>
  </html>
  
  <?php
@mysql_connect('localhost','root','');
 
@mysql_select_db('PCRMIS');
 
$res = mysql_query("SELECT * FROM `actsiya` ORDER BY `ID` DESC") or die(mysql_error());
 
$text = '<table border="1"></th>
<th>ID</th>
<th>Nazvanie</th>
<th>opisanie</th>
<th>usloviya_polucheniya</th>
<th>data_starta</th>
<th>Data_oconchaniya</th>
<th>Nalichie_card</th>
<th>delete</th>
<th>update</th></tr>';
while($row = mysql_fetch_assoc($res)) {
$text .= '<tr></tr><tr><td>'
.$row['ID'].'</td><td>'
.$row['Nazvanie'].'</td><td>'
.$row['opisanie'].'</td><td>'
.$row['usloviya_polucheniya'].'</td><td>'
.$row['data_starta'].'</td><td>'
.$row['Data_oconchaniya'].'</td><td>'
.$row['Nalichie_card'].'</td>
<td><a href= "delete_klient.php" >delete</a></td>
<td><a href= "update_klient.php" >update</a></td>
</tr>';
 
}

echo $text;
?>

