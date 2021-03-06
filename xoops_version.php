<?php
// $Id: xoops_version.php,v 1.2 2007/11/12 12:28:48 ohwada Exp $

// 2007-11-01 K.OHWADA
// hasAdmin

// 2006-07-10 K.OHWADA
// this is new file

//=========================================================
// Happy Linux Framework Module
// 2006-07-10 K.OHWADA
//=========================================================

include_once XOOPS_ROOT_PATH . '/modules/happy_linux/include/version.php';

$modversion['name']        = _MI_HAPPY_LINUX_NAME;
$modversion['description'] = _MI_HAPPY_LINUX_DESC;
$modversion['version']     = HAPPY_LINUX_VERSION;
$modversion['author']      = 'Kenichi OHWADA<br />( http://linux2.ohwada.net/ )';
$modversion['credits']     = '';
$modversion['help']        = '';
$modversion['license']     = 'GPL see LICENSE';
$modversion['official']    = 0;
$modversion['image']       = 'images/happy_linux_slogo.png';
$modversion['dirname']     = 'happy_linux';

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
//$modversion['sqlfile']['mysql'] = '';

// Tables created by sql file (without prefix!)
//$modversion['tables'][0] = '';

// Admin things
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 0;
//$modversion['sub'][1]['name'] = '';
//$modversion['sub'][1]['url']  = '';

//  Search
$modversion['hasSearch'] = 0;
//$modversion['search']['file'] = '';
//$modversion['search']['func'] = '';

// Blocks
//$modversion['blocks'][1]['file']        = '';
//$modversion['blocks'][1]['name']        = '';
//$modversion['blocks'][1]['description'] = '';
//$modversion['blocks'][1]['show_func']   = '';
//$modversion['blocks'][1]['edit_func']   = '';
//$modversion['blocks'][1]['options']     = '';
//$modversion['blocks'][1]['template']    = ''';

// Templates
//$modversion['templates'][1]['file'] = '';
//$modversion['templates'][1]['description'] = '';
;
