<?php
// Autoloader shim for package: php-vitexsoftware-ease-bootstrap5-widgets
// Includes dependency autoloaders if present and registers PSR-4 for project classes.

require_once '/usr/share/php/EaseTWB5/autoload.php';

// Register PSR-4 autoloader for Ease\TWB5\Widgets\ namespace
spl_autoload_register(function ($class) {
    $prefix = 'Ease\\TWB5\\Widgets\\';
    $base_dir = '/usr/share/php/EaseTWB5Widgets/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
