<?php

require('../vendor/autoload.php');
$path = '../vendor/sox/bin';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
$env = '../vendor/sox/lib';
$prev_env = getenv('LD_LIBRARY_PATH');
putenv("LD_LIBRARY_PATH={$prev_env}:{$env}");

$file_name = $_FILE['audio_file']['name'];
$file_name = substr($file_name, 0, strcspn($file_name, '.'));
$tmp_path = $_FILE['audo_file']['tmp_name'];

exec("sox {$tmp_path} ./{$file_name}.mp3");
