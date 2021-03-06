<?php

/**
 * @return array
 */
function b_waiting_catads()
{
    $ret     = [];
    $block   = [];
    $ads_hnd  = xoops_getModuleHandler('Ads', 'catads');
    $criteria = new \Criteria('waiting', '1', '=');
    $nbads    = $ads_hnd->getCount($criteria);
    if ($nbads > 0) {
        $block['adminlink']     = XOOPS_URL . '/modules/catads/admin/index.php?action=waiting';
        $block['pendingnum']    = $nbads;
        $block['lang_linkname'] = _PI_WAITING_WAITINGS;
    }

    $ret[] = $block;

    return $ret;
}
