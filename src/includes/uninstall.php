<?php
/**
 * Uninstaller.
 *
 * @since 150422 Rewrite.
 */
namespace WebSharks\ZenCache;

if (!defined('WPINC')) {
    exit('Do NOT access this file directly: '.basename(__FILE__));
}
require_once dirname(__FILE__).'/stub.php';

if (!Conflicts::check()) {
    $GLOBALS[GLOBAL_NS.'_uninstalling'] = true;
    $GLOBALS[GLOBAL_NS]                 = new Plugin(false);
    $GLOBALS[GLOBAL_NS]->uninstall();
}
