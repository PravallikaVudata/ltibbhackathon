<?php

session_start();

$host = "mysqldb.c9kgc0808z9q.us-east-2.rds.amazonaws.com"; /* Host name */
$user = "admin"; /* User */
$password = "admin123"; /* Password */
$dbname = "customers"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
