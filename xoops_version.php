<?php
/*
 You may not change or alter any portion of this comment or credits of
 supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit
 authors.

 This program is distributed in the hope that it will be useful, but
 WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */
/**
 * Module: Waiting
 *
 * @category        Module
 * @package         waiting
 * @author          Kazumi Ono (AKA onokazu)
 * @author          XOOPS Module Development Team
 * @copyright       {@link https://xoops.org 2001-2016 XOOPS Project}
 * @license         {@link http://www.fsf.org/copyleft/gpl.html GNU public license}
 * @link            http://www.myweb.ne.jp/
 * @link            https://xoops.org XOOPS
 * @since           2.00
 */

$moduleDirName                    = basename(__DIR__);
$modversion['version']            = 1.06;
$modversion['module_status']      = 'RC1';
$modversion['release_date']       = '2016/05/30';
$modversion['name']               = _MI_WAITING_NAME;
$modversion['description']        = _MI_WAITING_DESC;
$modversion['author']             = 'Ryuji (http://ryus.co.jp/)';
$modversion['author_website_url'] = 'http://ryus.co.jp';
$modversion['credits']            = 'Ryus';
$modversion['help']               = 'page=help';
$modversion['license']            = 'GNU GPL 2.0';
$modversion['license_url']        = 'www.gnu.org/licenses/gpl-2.0.html';
$modversion['official']           = 0;
$modversion['image']              = 'assets/images/logoModule.png';
$modversion['dirname']            = $moduleDirName;
//$modversion['dirmoduleadmin']      = '/Frameworks/moduleclasses/moduleadmin';
//$modversion['icons16']             = '../../Frameworks/moduleclasses/icons/16';
//$modversion['icons32']             = '../../Frameworks/moduleclasses/icons/32';
$modversion['modicons16']          = 'assets/images/icons/16';
$modversion['modicons32']          = 'assets/images/icons/32';
$modversion['module_website_url']  = 'www.xoops.org/';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '5.5';
$modversion['min_xoops']           = '2.5.9';
$modversion['min_admin']           = '1.2';
$modversion['min_db']              = array('mysql' => '5.5');

// Admin things
$modversion['hasAdmin']    = 1;
$modversion['system_menu'] = 1;
$modversion['adminmenu']   = 'admin/menu.php';
$modversion['adminindex']  = 'admin/index.php';

// Templates

// Blocks
$modversion['blocks'][1]['file']        = 'waiting_waiting.php';
$modversion['blocks'][1]['name']        = _MI_WAITING_BNAME1;
$modversion['blocks'][1]['description'] = _MI_WAITING_BNAME1_DESC;
$modversion['blocks'][1]['show_func']   = 'b_waiting_waiting_show';
$modversion['blocks'][1]['edit_func']   = 'b_waiting_waiting_edit';
$modversion['blocks'][1]['template']    = 'waiting_block_waiting.html';
$modversion['blocks'][1]['options']     = '1|5';

// On Update
if (!empty($_POST['fct']) && !empty($_POST['op']) && $_POST['fct'] === 'modulesadmin' && $_POST['op'] === 'update_ok' && $_POST['module'] == $moduleDirName) {
    include __DIR__ . '/include/updateblock.inc.php';
}
