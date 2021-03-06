<?php

/**
 * @return array
 */
function b_waiting_piCal()
{
    /** @var \XoopsMySQLDatabase $xoopsDB */
    $xoopsDB = \XoopsDatabaseFactory::getDatabaseConnection();
    $ret     = [];
    $block   = [];

    //piCal
    $result = $xoopsDB->query('SELECT COUNT(*) FROM ' . $xoopsDB->prefix('pical_event') . ' WHERE admission<1 AND (rrule_pid=0 OR rrule_pid=id)');
    if ($result) {
        $block['adminlink'] = XOOPS_URL . '/modules/piCal/admin/admission.php';
        [$block['pendingnum']] = $xoopsDB->fetchRow($result);
        $block['lang_linkname'] = _PI_WAITING_EVENTS;
    }

    $ret[] = $block;

    return $ret;
}
