<?php
session_start();
session_destroy(); // Hancurkan sesi
header("Location: index.php"); // Arahkan kembali ke halaman login
exit();
?>