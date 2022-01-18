<?php 

  $_POST['user'] = trim($_POST['user']); 
  $_POST['pass'] = trim($_POST['pass']); 
  
  
  if(empty($_POST['user'])) exit(); 
 
  if(empty($_POST['user'])) exit('Поле "Имя" не заполнено'); 
  if(empty($_POST['pass'])) exit('Поле "Пароль" не заполнено'); 
  
  
  $filename = "users.txt";  
  $arr = file($filename); 
  foreach($arr as $line) 
  { 
     
    $data = explode("::",$line); 
    
    $temp['password'][$i] = rtrim($data[1]);
 
  } 
  
  if(in_array($_POST['user'], $temp)) 
  { 
    exit("Данное имя уже зарегистрировано"); 
  } 
 
  
  $fd = fopen($filename, "a"); 
  if(!$fd) exit("Ошибка при открытии файла"); 
  $str = $_POST['user']."::". 
         $_POST['pass']."\r\n"; 
  fwrite($fd,$str); 
  fclose($fd); 
  echo "<HTML><HEAD> 
         <META HTTP-EQUIV='Refresh' CONTENT='0; URL=$_SERVER[PHP_SELF]'> 
        </HEAD></HTML>"; 
?>