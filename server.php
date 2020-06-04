<?php

/**
 * Laravel - A PHP Framework For Web Artisans.
 *
 * @author   Taylor Otwell <taylor@laravel.com>
 */
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ('/app' === $uri) {
    header('Status: 301 Moved Permanently', false, 301);
    header('Location: '.$uri.'/');

    return true;
} elseif ('/' !== $uri && file_exists(__DIR__.'/public_html'.$uri)) {
    return false;
}

require_once __DIR__.'/public_html/index.php';
