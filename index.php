<?php 
echo date ("l dS of F Y h:i:s A")."<br>";
echo date("������� d.m.Y")."<br>";
echo date ("���� ���� ��������� d.m.Y", filectime(__FILE__));
/////////////////////////////////////////////////////////////
echo "<br>";
setlocale(LC_ALL,'DirName' ); 
echo strftime("%B %Y ����, %d �����. ��� %�, ���� ���������� %�:%�."); 
/////////////////////////////////////////////////////////////
echo "<br>";
?>