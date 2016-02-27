<?php
$name = $_POST['name'];
$post = $_POST['text'];
chdir("pastes");
$file = fopen("$name.txt","w") or die('<link rel="stylesheet" type="text/css" href="error.css"><h1>Your paste did not upload! ;_; please <a href="index.html">click here</a> to try again</h1>');
fwrite($file,$post);
include('uploaded.php');
?>
