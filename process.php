<?php

  $a = $_GET['a'];
  $b = $_GET['b'];
  $c = $_GET['c'];
  $d = $_GET['d'];
  $e = $_GET['e'];

  $command = escapeshellcmd("python3 data_management.py $a $b $c $d $e");
  $output = shell_exec($command);
  echo $output;
?>