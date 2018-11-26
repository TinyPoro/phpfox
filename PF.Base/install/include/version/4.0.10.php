<?php

return function(Phpfox_Installer $Installer) {
  $Installer->db->query("DELETE FROM " . Phpfox::getT('setting') . " WHERE `module_id`='share' AND `var_name`='share_on_facebook';");
  $Installer->db->query("DELETE FROM " . Phpfox::getT('block') . " WHERE `module_id`='pages' AND `m_connection`='pages.view' AND `component` = 'photo';");
  $Installer->db->query("UPDATE ". Phpfox::getT('setting') ." SET `group_id` = 'registration' WHERE `module_id` = 'core' AND `var_name`='global_genders';");
  $Installer->db->query("DELETE FROM " . Phpfox::getT('setting') . " WHERE `module_id`='friend' AND `var_name`='birthdays_cache_time_out';");
  $Installer->db->query("UPDATE `" . Phpfox::getT('setting') . "` SET `value_actual`=1, `value_default`=1 WHERE `var_name`='hide_denied_requests_from_pending_list' AND `module_id`='friend';");
  $Installer->db->query("UPDATE `" . Phpfox::getT('language_phrase') . "` SET `text`='{full_name} liked a comment you made on the page \"{title}\"', `text_default`='{full_name} liked a comment you made on the page \"{title}\"' WHERE `var_name`='full_name_liked_a_comment_you_made_on_the_page_title' AND `module_id`='pages';");

  //Add pages menu
  $iCnt = $Installer->db->select('COUNT(*)')
    ->from(':menu')
    ->where('m_connection="main" AND url_value="pages"')
    ->execute('getField');
  if ($iCnt == 0 || empty($iCnt)){
    $aVals = array(
      'product_id' => 'phpfox',
      'module_id' => 'core|core',
      'm_connection' => 'main',
      'url_value' => 'pages',
      'mobile_icon' => 'th',
      'text' => array(
        'en' => 'Pages'
      ),
      'allow_all' => true
    );
    Phpfox::getService('admincp.menu.process')->add($aVals);
  }
};