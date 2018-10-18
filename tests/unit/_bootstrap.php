<?php

$envPath = codecept_root_dir() . ".env";
if (file_exists($envPath)) {
    $handle = @fopen($envPath, "r");

    if ($handle) {
        while (($setting = fgets($handle)) !== false) {
            putenv(trim($setting));
        }
        fclose($handle);
    }
}
