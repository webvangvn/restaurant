<?php

/**
 * @Project NUKEVIET 4.x
 * @Author CLB HCMC (adminwmt@gmail.com)
 * @Copyright (C) 2017 CLB HCMC. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 05 Apr 2017 19:14:05 GMT
 */

if ( ! defined( 'NV_IS_MOD_RESTAURANT' ) ) die( 'Stop!!!' );

/**
 * nv_theme_restaurant_main()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_restaurant_main ( $array_data )
{
    global $global_config, $module_name, $module_file, $lang_module, $module_config, $module_info, $op;

    $xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file );
    $xtpl->assign( 'LANG', $lang_module );

    

    $xtpl->parse( 'main' );
    return $xtpl->text( 'main' );
}

/**
 * nv_theme_restaurant_detail()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_restaurant_detail ( $array_data )
{
    global $global_config, $module_name, $module_file, $lang_module, $module_config, $module_info, $op;

    $xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file );
    $xtpl->assign( 'LANG', $lang_module );

    

    $xtpl->parse( 'main' );
    return $xtpl->text( 'main' );
}

/**
 * nv_theme_restaurant_search()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_restaurant_search ( $array_data )
{
    global $global_config, $module_name, $module_file, $lang_module, $module_config, $module_info, $op;

    $xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file );
    $xtpl->assign( 'LANG', $lang_module );

    

    $xtpl->parse( 'main' );
    return $xtpl->text( 'main' );
}