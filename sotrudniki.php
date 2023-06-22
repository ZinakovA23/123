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
    <li><a href="tech park.php">Технический парк</a></li>
		<li><a href="remont park.php">ремонтный парк</a></li>
    <li><a href="authandreg.html" class="dropbtn">Выход</a></li>
		<li><a href="akti priema-peredachi.php">акты приема-передачи</a></li>
    <li><a href="nabor dokumentov.html">наборы документов</a></li>
  </ul>
</nav>
    
 <!-- __________________________________________________________________________________-->
  <div id="footer"> &copy; проект "Информационная система управления аренды легковых автомобилей". Создан студентами группы БВТ2151 Зинаков А.Ю и Полегенько.А Все права защищены(нет).</div>
  <input type="search" name="text" required placeholder="поиск по сайту" size="26" autocomplete="off" autofocus>
  <input type="submit" value="Найти">
    
    <h2> Таблица "сотрудники"</h2>
    
  <div class = 'ins\up\del'>
   <button class="dropbtn_2" ><a href="">добавление записи</li></button></a> 
   <button class="dropbtn_2" ><a href="dogovor arendi.php"> &#8594; договоры аренды</a></button>
  <button class="dropbtn_2" ><a href="klienti.php"> &#8592; клиенты </a></button>
    </div>
    
  </body>
  </html>
  
    <?php
@mysql_connect('localhost','root','');
 
@mysql_select_db('PCRMIS');
 
$res = mysql_query("SELECT * FROM `sotrudniki` ORDER BY `ID` DESC") or die(mysql_error());
 
$text = '<table border="1"></th>
<th>ID</th>
<th>FIO</th>
<th>Doljnost</th>
<th>Nomer_trud_dogovor</th>
<th>Nomer_pasporta</th>
<th>Seriya_pasporta</th>
<th>Data_priema</th>
<th>delete</th>
<th>update</th></tr>';
while($row = mysql_fetch_assoc($res)) {
$text .= '<tr></tr><tr><td>'
.$row['ID'].'</td><td>'
.$row['FIO'].'</td><td>'
.$row['Doljnost'].'</td><td>'
.$row['Nomer_trud_dogovor'].'</td><td>'
.$row['Nomer_pasporta'].'</td><td>'
.$row['Seriya_pasporta'].'</td><td>'
.$row['Data_priema'].'</td>
<td><a href= "delete_klient.php" >delete</a></td>
<td><a href= "update_klient.php" >update</a></td>
</tr>';
 
}

echo $text;
?>