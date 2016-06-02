<?php

require('../vendor/autoload.php');
$env = '/app/vendor/sox/lib';
putenv("LD_LIBRARY_PATH={$env}");

$file_name = $_FILES['audio_file']['name'];
$file_name = substr($file_name, 0, strcspn($file_name, '.'));
$tmp_path = $_FILES['audio_file']['tmp_name'];
$out_path = "/tmp/{$file_name}.mp3";

$cmd = "sox {$tmp_path} {$out_path}";
exec($cmd);

$content_length = filesize($out_path);
$read_data = file_get_contents($out_path);

/* Output HTTP Header */
header('Content-Disposition: inline; filename="'.basename($out_path).'"');
header('Content-Length: '.$content_length);
header('Content-Type: application/octet-stream');

/* Output File Data */
readfile($out_path);
unlink($out_path);
