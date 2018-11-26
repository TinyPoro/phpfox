<?php
namespace Apps\Core_Subscriptions\Controller\Admin;

use Phpfox;
use Phpfox_Component;
use Phpfox_Error;

defined('PHPFOX') or exit('NO DICE!');

class AddReasonController extends Phpfox_Component
{
    public function process()
    {
        $bIsEdit = false;
        $isAjaxPopup = $this->request()->getInt('is_ajax_popup');
        $aDefaultLanguage  = array_shift(Phpfox::getService('language')->getAll(true));
        $this->template()->assign([
            'sDefaultLanguage' => $aDefaultLanguage['language_id'],
            'isAjaxPopup' => $isAjaxPopup
        ]);


        if($iReasonId = $this->request()->getInt('id'))
        {
            $aReason = Phpfox::getService('subscribe.reason')->getReasonById($iReasonId);
            $iTitleLength = strlen(_p($aReason['title_parsed']));
            $bIsEdit = true;
            $this->template()->assign([
               'aForms' => $aReason,
                'bIsEdit' => $bIsEdit,
                'sPhraseTitle' => $aReason['title'],
                'iTitleLength' => $iTitleLength
            ]);
        }
        if($aVals = $this->request()->getArray('val'))
        {

            foreach($aVals['title'] as $sKey => $sValue)
            {
                if($sKey == $aDefaultLanguage['language_id'])
                {
                    $sTemp = trim(trim(strip_tags($sValue)), '&nbsp;');
                    if(empty($sValue) || !is_string($sValue)){
                        Phpfox_Error::set(_p('subscribe_invalid_reason_title'));
                        break;
                    }
                }
            }
            if(!Phpfox_Error::isPassed())
            {
                $this->template()->setHeader('cache', [
                    'jscript/admincp/admincp.js' => 'app_core-subscriptions',
                    'head' => ['colorpicker/css/colpick.css' => 'static_script'],
                ]);
                return false;
            }

            if($bIsEdit)
            {
                $bAjaxPopup = $this->request()->getInt('ajax_popup');
                $bSuccess = Phpfox::getService('subscribe.reason.process')->updateReason($iReasonId, $aVals);
                if($bSuccess)
                {
                    if(!empty($bAjaxPopup))
                    {
                        $this->url()->send('admincp.subscribe.reason',[], _p('Update reason successfully'));
                    }
                    else
                    {
                        $this->url()->send(\Phpfox_Url::instance()->makeUrl('admincp.subscribe.add-reason',['id' => $iReasonId]),[], _p('Update reason successfully'));
                    }

                }
                return false;

            }
            else
            {
                Phpfox::getService('subscribe.reason.process')->addReason($aVals);
                $this->url()->send('admincp.subscribe.reason',[], _p('Add new reason successfully'));
            }

        }
        $this->template()->setTitle(($bIsEdit) ? _p('Edit Reason').': '._p($aReason['title']) : _p('Add Reason'))
            ->setBreadCrumb(_p('subscriptions'),$this->url()->makeUrl('admincp.subscribe'))
            ->setBreadCrumb(($bIsEdit ? _p('Edit Reason') : _p('Add New Reason')), null, true)
            ->setActiveMenu('admincp.member.subscribe')
            ->setHeader('cache', [
                'jscript/admincp/admincp.js' => 'app_core-subscriptions',
                'head' => ['colorpicker/css/colpick.css' => 'static_script'],
            ]);
    }
}