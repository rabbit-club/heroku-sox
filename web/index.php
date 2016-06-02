<?php

require('../vendor/autoload.php');
$env = '/app/vendor/sox/lib';
putenv("LD_LIBRARY_PATH={$env}");

$file_name = $_FILE['audio_file']['name'];
$file_name = substr($file_name, 0, strcspn($file_name, '.'));
$tmp_path = $_FILE['audo_file']['tmp_name'];

echo $tmp_path."\n";
echo $file_name."\n";
exec("sox {$tmp_path} ./{$file_name}.mp3");
