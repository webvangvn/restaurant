<?php

/**
 * @Project NUKEVIET 4.x
 * @Author CLB HCMC (adminwmt@gmail.com)
 * @Copyright (C) 2017 CLB HCMC. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 05 Apr 2017 19:14:05 GMT
 */

if ( ! defined( 'NV_IS_MOD_RESTAURANT' ) ) die( 'Stop!!!' );

$page_title = $module_info['custom_title'];
$key_words = $module_info['keywords'];

$array_data = array();



$contents = nv_theme_restaurant_search( $array_data );

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme( $contents );
include NV_ROOTDIR . '/includes/footer.php';
