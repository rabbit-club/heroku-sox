<?php

require('../vendor/autoload.php');

$file_name = $_FILE['audio_file']['name'];
$file_name = substr($file_name, 0, strcspn($file_name, '.'));
$tmp_path = $_FILE['audo_file']['tmp_name'];

exec("../vendor/sox/bin/sox {$tmp_path} ./{$file_name}.mp3");
