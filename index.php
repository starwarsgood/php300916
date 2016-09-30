<?php 
echo date ("l dS of F Y h:i:s A")."<br>";
echo date("Сегодня d.m.Y")."<br>";
echo date ("Этот файл датирован d.m.Y", filectime(__FILE__));
/////////////////////////////////////////////////////////////
echo "<br>";
setlocale(LC_ALL,'DirName' ); 
echo strftime("%B %Y года, %d число. Был %А, часы показывали %Н:%М."); 
/////////////////////////////////////////////////////////////
echo "<br>";
?>