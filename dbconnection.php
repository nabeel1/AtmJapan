<?php $user="atmjapan_anwer";
$pass="GAhe?nUm8S[B";
$connect=mysql_connect('localhost', $user , $pass) or die ('could not connect to: ' . mysql_error());
$db='atmjapan_atm';
mysql_select_db($db) or die ('could not select database ('.$db.')');
@session_start();?>
