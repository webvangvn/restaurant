<?php

/**
 * @Project NUKEVIET 4.x
 * @Author CLB HCMC (adminwmt@gmail.com)
 * @Copyright (C) 2017 CLB HCMC. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 05 Apr 2017 19:14:05 GMT
 */

if ( ! defined( 'NV_IS_FILE_SITEINFO' ) ) die( 'Stop!!!' );


$lang_siteinfo = nv_get_lang_module( $mod );
/*
// Tong so bai viet
$number = $db->query( 'SELECT COUNT(*) FROM ' . NV_PREFIXLANG . '_' . $mod_data . '_rows where status= 1 AND publtime < ' . NV_CURRENTTIME . ' AND (exptime=0 OR exptime>' . NV_CURRENTTIME . ')' )->fetchColumn();
if ( $number > 0 )
{
    $siteinfo[] = array(
        'key' => $lang_siteinfo['siteinfo_publtime'], 'value' => $number
    );
}
*/