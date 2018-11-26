<?php

if(Phpfox::isAppActive('Core_Activity_Points') && preg_match('/points_/',$aRow['value']))
{

    $iCnt = db()->select('COUNT(*)')
        ->from(Phpfox::getT('activitypoint_setting'))
        ->where(['module_id' => ($sModule === null ? $aRow['module_id'] : $sModule), 'var_name' => $aRow['value']])
        ->execute('getSlaveField');
    if(!$iCnt)
    {
        $aInsert = [
            'var_name' => $aRow['value'],
            'phrase_var_name' => 'user_setting_'.$aRow['value'],
            'module_id' => ($sModule === null ? $aRow['module_id'] : $sModule)
        ];
        db()->insert(Phpfox::getT('activitypoint_setting'), $aInsert);
    }

    $iTransactionCnt = db()->select('COUNT(*)')
        ->from(Phpfox::getT('activitypoint_transaction'))
        ->where('module_id = "'. ($sModule === null ? $aRow['module_id'] : $sModule) .'" AND is_hidden = 1')
        ->execute('getSlaveField');
    if($iTransactionCnt)
    {
        db()->update(Phpfox::getT('activitypoint_transaction'),['is_hidden' => 0], 'module_id = "'. ($sModule === null ? $aRow['module_id'] : $sModule). '"');
    }
}