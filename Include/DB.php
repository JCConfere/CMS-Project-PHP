<?php
$Connection=mysql_connect('localhost','root','');
$ConnectingDB=mysql_select_db('phpcms',$Connection);

if($Connection)
{
  echo "Database Connected <br />";
} else {
  error.mysql_connect();
}
$ConnectingDB=mysql_select_db('record',$Connection);
if($ConnectingDB)
{
  echo "Database selected <br />";
} else {
  error.mysql_select_db;
}
?>
