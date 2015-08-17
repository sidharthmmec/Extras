<?php
$purge_date = strtotime('-90 days');
echo'<pre>';
echo $purge_date .'<br>';
$dir_date = strtotime('04/13/2015');
echo $dir_date .'<br>';
$dir_date = strtotime('27-02-1992');
echo $dir_date .'<br>';
if($purge_date >= $dir_date)
echo'yes';
