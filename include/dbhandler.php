<?php
$dBserverName='localhost';
$dBUsername='root';
$dBPassword='silvestre8402';
$dBName='PHP';

$conn = mysqli_connect($dBserverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Not Connected: ". mysqli_connect_error());
}  