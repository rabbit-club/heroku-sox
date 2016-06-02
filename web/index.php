<?php

require('../vendor/autoload.php');
$env = '/app/vendor/sox/lib';
putenv("LD_LIBRARY_PATH={$env}");

echo 'hoge'."\n";
$file_name = $_FILES['audio_file']['name'];
echo $file_name."\n";
$file_name = substr($file_name, 0, strcspn($file_name, '.'));
$tmp_path = $_FILES['audio_file']['tmp_name'];

echo $tmp_path."\n";
exec("sox {$tmp_path} ./{$file_name}.mp3");
