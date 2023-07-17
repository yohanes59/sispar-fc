<?php
$SERVER = 'localhost';
$USER = 'root';
$PASS = '';
$DATABASE = 'sisparfc_db';

$conn = mysqli_connect($SERVER, $USER, $PASS, $DATABASE);
if (!$conn) die("Sory we failed to connect: " . mysqli_connect_error());
