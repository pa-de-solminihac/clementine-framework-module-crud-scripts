<?php
/**
 * Script non interactif : ensure /files/app is protected by .htaccess
 */

$htaccess_filepath = __INSTALLER_ROOT__ . '/../files/app/.htaccess';
if (!file_exists($htaccess_filepath)) {
    file_put_contents($htaccess_filepath, 'RewriteEngine On' . PHP_EOL . 'RewriteRule .* ../../index.php [L]');
}

return true;
