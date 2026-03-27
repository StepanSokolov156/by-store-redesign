<?php return array (
  '74358617a55bb82715934f12fd29c220' => 
  array (
    'criteria' => 
    array (
      'name' => 'msimportexport',
    ),
    'object' => 
    array (
      'name' => 'msimportexport',
      'path' => '{core_path}components/msimportexport/',
      'assets_path' => '{assets_path}components/msimportexport/',
    ),
  ),
  'd3db5dd8ef20f627d1d703e7e553c0f0' => 
  array (
    'criteria' => 
    array (
      'text' => '',
    ),
    'object' => 
    array (
      'text' => '',
      'parent' => '',
      'action' => '',
      'description' => '',
      'icon' => '',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
  'cf74891b1df892f36e3f7f2d36b845fe' => 
  array (
    'criteria' => 
    array (
      'text' => '',
    ),
    'object' => 
    array (
      'text' => '',
      'parent' => '',
      'action' => '',
      'description' => '',
      'icon' => '',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
  '4b4b9d439de0c1e53cd526c22c3ab684' => 
  array (
    'criteria' => 
    array (
      'text' => '',
    ),
    'object' => 
    array (
      'text' => '',
      'parent' => '',
      'action' => '',
      'description' => '',
      'icon' => '',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
  '5f27e3e1d5b630f80aba510e13520cde' => 
  array (
    'criteria' => 
    array (
      'text' => '',
    ),
    'object' => 
    array (
      'text' => '',
      'parent' => '',
      'action' => '',
      'description' => '',
      'icon' => '',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
  '10f3a139c5a850f587e76b712d3f7e30' => 
  array (
    'criteria' => 
    array (
      'text' => '',
    ),
    'object' => 
    array (
      'text' => '',
      'parent' => '',
      'action' => '',
      'description' => '',
      'icon' => '',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
  '9d43c4932131a8d6ded7375e9f451c7e' => 
  array (
    'criteria' => 
    array (
      'key' => 'msimportexport_export_default_settings',
    ),
    'object' => 
    array (
      'key' => 'msimportexport_export_default_settings',
      'value' => '{"debug":0,"export_format":"","filename":"","export_path":"","file_ttl":0,"download_lock_ttl":"","archive":0,"skip_top_lines":"","add_keys":0,"add_fields":0,"skip_field_parse":"","first_delimiter":"|","second_delimiter":"%","auto_restart_limit":1,"limit":500,"where":"","leftjoin":"","innerjoin":"","select":"","notice":"","notice_method":"email","notice_email":"","notice_status":[],"notice_template_subject":"Task ID:{$id} status: {$status_text}","notice_template_message":"{switch $status}\\r\\n    {case \'initiated\'}\\r\\n        Mode:{$mode}; preset ID:{$preset_id} ({$preset_name}) \\r\\n    {case \'completed\'}\\r\\n        Mode:{$mode}; preset ID:{$preset_id} ({$preset_name})\\r\\n        <ul>\\r\\n        Stats:\\r\\n        {foreach $stats as $key =>$val}\\r\\n            <li>{$key}: {$val}<\\/li>\\r\\n        {\\/foreach}\\r\\n        <\\/ul>\\r\\n        Total time: {$total_time}\\r\\n    {case \'failed\'}\\r\\n        Mode:{$mode}; preset ID:{$preset_id} ({$preset_name})\\r\\n        Stats: {$stats|print}\\r\\n    {case default}\\r\\n        Mode:{$mode}; preset ID:{$preset_id} ({$preset_name})\\r\\n{\\/switch}","csv_delimiter":";","csv_enclosure":"\\"","csv_escape":"\\\\\\\\","iteration_report":3,"task_refresh_freq":2,"script_memory_limit":"","ctx":"","resources":"","published_only":1,"exclude_deleted":1,"gallery_type":"","gallery_absolute_url":1,"gallery_concatenate_images":1,"gallery_image_delimiter":",","gallery_add_images_to_archive":"","gallery_copy_image":0,"gallery_limit":0,"gallery_sortdir":"DESC","gallery_copy_image_path":"\\/home\\/bystoreb\\/public_html\\/assets\\/images\\/export\\/{task_id}\\/","gallery_attach_settings":"{\\"thumb\\":\\"small\\",\\"width\\":150}","ym_offer_type":"simple","ym_default_currency":"RUB","ym_rate_currency":"CBRF","ym_currencies":"RUB","ym_delivery_default":0,"ym_pickup_default":1,"ym_store_default":1,"ym_available_default":1,"ym_description_fields":"description,introtext","ym_desc_allowed_tags":"<p>,<strong>,<i>,<u>","ym_include_saleprice":0,"ym_only_saleprice_price":0,"ym_include_optionsprice2":0,"ym_multicategories":0,"vendors":"","price_format":[0,".",""],"price_format_no_zeros":1,"allow_price_modification":0,"multicategory_format":0}',
      'xtype' => 'textfield',
      'namespace' => 'msimportexport',
      'area' => '',
      'editedon' => '2024-04-22 20:46:18',
    ),
  ),
  'f26a8378d3ba82d7074045b07fd86537' => 
  array (
    'criteria' => 
    array (
      'key' => 'msimportexport_export_exclude_fields',
    ),
    'object' => 
    array (
      'key' => 'msimportexport_export_exclude_fields',
      'value' => 'type,contentType,donthit,privateweb,privatemgr,content_dispo,class_key,context_key,content_type',
      'xtype' => 'textfield',
      'namespace' => 'msimportexport',
      'area' => 'msimportexport_export',
      'editedon' => NULL,
    ),
  ),
  'bd98159560b545e5a7191cc03b676233' => 
  array (
    'criteria' => 
    array (
      'key' => 'msimportexport_import_default_settings',
    ),
    'object' => 
    array (
      'key' => 'msimportexport_import_default_settings',
      'value' => '{"debug":0,"start_from_line":"","file":"","remove_source_file":0,"first_delimiter":"|","second_delimiter":"%","iteration_report":2,"task_refresh_freq":15,"auto_restart_limit":1,"csv_delimiter":";","csv_enclosure":"\\"","csv_escape":"\\\\\\\\","convert_encoding":"","source_encode":"cp1251","notice":0,"notice_method":"email","notice_email":"","notice_status":[],"notice_template_subject":"Task ID:{$id} status: {$status_text}","notice_template_message":"{switch $status}\\r\\n    {case \'initiated\'}\\r\\n        Mode:{$mode}; preset ID:{$preset_id} ({$preset_name}) \\r\\n    {case \'completed\'}\\r\\n        Mode:{$mode}; preset ID:{$preset_id} ({$preset_name})\\r\\n        <ul>\\r\\n        Stats:\\r\\n        {foreach $stats as $key =>$val}\\r\\n            <li>{$key}: {$val}<\\/li>\\r\\n        {\\/foreach}\\r\\n        <\\/ul>\\r\\n        Total time: {$total_time}\\r\\n    {case \'failed\'}\\r\\n        Mode:{$mode}; preset ID:{$preset_id} ({$preset_name})\\r\\n        Stats: {$stats|print}\\r\\n    {case default}\\r\\n        Mode:{$mode}; preset ID:{$preset_id} ({$preset_name})\\r\\n{\\/switch}","script_memory_limit":"","checking_field":"pagetitle","check_existence":1,"disable_map_generation":1,"parent_default":0,"parent_delimiter":"","skip_empty_parent":0,"skip_action":"","skip_empty_checking_field":1,"check_unique_alias":0,"create_unique_alias":0,"template_unique_alias":"","use_alias_in_search":0,"ctx":"","completion_action":"","text_format_method":"nl2br","text_format_fields":"","template_resource_default":1,"published_resource_default":1,"hidemenu_resource_default":0,"searchable_resource_default":1,"gallery_base_path_images":"","gallery_resize_upload_image":0,"gallery_remove_images":0,"gallery_force_update":0,"gallery_type":"","gallery_image_delimiter":",","mspr_remove_remains":0,"msopm_disable_modification":0,"msopm_remove_modification":0,"msoc_record_find_fields":"key","msoc_disable_color":0,"msoc_remove_color":0,"create_article":0,"template_article":"","template_product_default":1,"published_product_default":1,"hidemenu_product_default":1,"searchable_product_default":1,"remove_links":0}',
      'xtype' => 'textfield',
      'namespace' => 'msimportexport',
      'area' => '',
      'editedon' => '2024-04-22 20:46:18',
    ),
  ),
  '60167fdf12907c16292d614a476f840b' => 
  array (
    'criteria' => 
    array (
      'key' => 'msimportexport_import_exclude_fields',
    ),
    'object' => 
    array (
      'key' => 'msimportexport_import_exclude_fields',
      'value' => 'type,contentType,donthit,privateweb,privatemgr,content_dispo,class_key,context_key,content_type,source,image,thumb',
      'xtype' => 'textfield',
      'namespace' => 'msimportexport',
      'area' => 'msimportexport_import',
      'editedon' => NULL,
    ),
  ),
  'e64af3180397d4a89f5987e3cf003108' => 
  array (
    'criteria' => 
    array (
      'key' => 'msimportexport_min_php_version',
    ),
    'object' => 
    array (
      'key' => 'msimportexport_min_php_version',
      'value' => '7.3.*',
      'xtype' => 'textfield',
      'namespace' => 'msimportexport',
      'area' => 'msimportexport_system',
      'editedon' => NULL,
    ),
  ),
  '3836c5d8349d66f3f8f5328a02e04957' => 
  array (
    'criteria' => 
    array (
      'key' => 'msimportexport_readers',
    ),
    'object' => 
    array (
      'key' => 'msimportexport_readers',
      'value' => '{"csv":"MsIeCSVReader","xlsx":"MsIeXLSXReader","ods":"MsIeODSReader","json":"MsIeJSONReader","xml":"MsIeXMLReader"}',
      'xtype' => 'textfield',
      'namespace' => 'msimportexport',
      'area' => 'msimportexport_system',
      'editedon' => NULL,
    ),
  ),
  '062cdaa3a6c04c25244485c2e5b2d7ad' => 
  array (
    'criteria' => 
    array (
      'key' => 'msimportexport_show_hidden_settings',
    ),
    'object' => 
    array (
      'key' => 'msimportexport_show_hidden_settings',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'msimportexport',
      'area' => 'msimportexport_system',
      'editedon' => NULL,
    ),
  ),
  '4e238edf3d7cf911f880be0271445cb0' => 
  array (
    'criteria' => 
    array (
      'key' => 'msimportexport_system_settings',
    ),
    'object' => 
    array (
      'key' => 'msimportexport_system_settings',
      'value' => '{"php_interpreter":"/usr/local/bin/php","watcher_script_path":"/home/bystoreb/public_html/core/components/msimportexport/scripts/watcher.php","watcher_max_count":3,"watcher_wait":3,"watcher_lifetime":1800,"mysql_wait_timeout":28800,"watcher_debug":0,"task_list_refresh_freq":30,"pid_refresh_freq":3,"gc_file_maxlifetime":259200,"gc_task_maxlifetime":259200,"gc_schedule":"5 5 * * *","tmp_path":"{+assets_path}tmp/","upload_path":"{+assets_path}upload/","export_path":"{+assets_path}export/","search_depth":10,"daemon_mode":0}',
      'xtype' => 'textarea',
      'namespace' => 'msimportexport',
      'area' => 'msimportexport_system',
      'editedon' => '2024-04-22 17:51:27',
    ),
  ),
  '3d7614758c202f6cd869d0fc251faf1b' => 
  array (
    'criteria' => 
    array (
      'key' => 'msimportexport_task_manager_handler_class',
    ),
    'object' => 
    array (
      'key' => 'msimportexport_task_manager_handler_class',
      'value' => 'MsIeTaskManager',
      'xtype' => 'textfield',
      'namespace' => 'msimportexport',
      'area' => 'msimportexport_system',
      'editedon' => NULL,
    ),
  ),
  '275f07a8b2fe47d2f7a80455cc9e2205' => 
  array (
    'criteria' => 
    array (
      'key' => 'msimportexport_tools_handler_class',
    ),
    'object' => 
    array (
      'key' => 'msimportexport_tools_handler_class',
      'value' => 'MsIeTools',
      'xtype' => 'textfield',
      'namespace' => 'msimportexport',
      'area' => 'msimportexport_system',
      'editedon' => NULL,
    ),
  ),
  '847695cff959f80315b018a9b66fbbad' => 
  array (
    'criteria' => 
    array (
      'key' => 'msimportexport_watcher_handler_class',
    ),
    'object' => 
    array (
      'key' => 'msimportexport_watcher_handler_class',
      'value' => 'MsIeWatcher',
      'xtype' => 'textfield',
      'namespace' => 'msimportexport',
      'area' => 'msimportexport_system',
      'editedon' => NULL,
    ),
  ),
  'a6fdd9d167096500e0789c9a47cf3a7e' => 
  array (
    'criteria' => 
    array (
      'key' => 'msimportexport_writers',
    ),
    'object' => 
    array (
      'key' => 'msimportexport_writers',
      'value' => '{"csv":"MsIeCSVWriter","xlsx":"MsIeXLSXWriter","xlsx2":"MsIeXLSX2Writer","ods":"MsIeODSWriter","json":"MsIeJSONWriter","xml":"MsIeXMLWriter"}',
      'xtype' => 'textfield',
      'namespace' => 'msimportexport',
      'area' => 'msimportexport_system',
      'editedon' => NULL,
    ),
  ),
);