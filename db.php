<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "suaramerdeka"
);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>