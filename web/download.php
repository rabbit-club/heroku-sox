<?php

$file_name = $_GET['audio_file'];
$out_path = "/tmp/{$file_name}";

$content_length = filesize($out_path);
$read_data = file_get_contents($out_path);

/* Output HTTP Header */
header('Content-Disposition: inline; filename="'.basename($out_path).'"');
header('Content-Length: '.$content_length);
header('Content-Type: application/octet-stream');

/* Output File Data */
readfile($out_path);
