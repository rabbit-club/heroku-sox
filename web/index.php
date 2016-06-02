<?php

require('../vendor/autoload.php');
$path = '/app/vendor/sox/bin';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
echo get_include_path()."\n";
$env = '/app/vendor/sox/lib';
putenv("LD_LIBRARY_PATH={$env}");
echo getenv('LD_LIBRARY_PATH')."\n";

$file_name = $_FILE['audio_file']['name'];
$file_name = substr($file_name, 0, strcspn($file_name, '.'));
$tmp_path = $_FILE['audo_file']['tmp_name'];

exec("sox {$tmp_path} ./{$file_name}.mp3");
