<?php
defined('PHPFOX') or exit('NO DICE!');

/**
 * Class Tag_Component_Block_Item
 */
class Tag_Component_Block_Item extends Phpfox_Component 
{
	/**
	 * Controller
	 */
	public function process()
	{
		if (!Phpfox::getParam('tag.enable_tag_support'))
		{
			return false;
		}

		if (!defined('PHPFOX_TAG_PARENT_MODULE'))
		{
			define('PHPFOX_TAG_PARENT_MODULE', $this->getParam('sTagListParentModule', null));
		}
		if (!defined('PHPFOX_TAG_PARENT_ID'))
		{
			define('PHPFOX_TAG_PARENT_ID', $this->getParam('iTagListParentId', 0));
		}
		
		$this->template()->assign('sMicroKeywords', $this->getParam('sMicroKeywords'));
		
		if (($sType = $this->getParam('type')))
		{
			$aUser = $this->getParam('aUser');
			$sLink = Phpfox::callback($sType . '.getTagLink', $aUser);
					
			$iItemId = $this->getParam('item_id');				
			$sTags = '';
			$sTagsClean = '';
			$aMainTags = Phpfox::getService('tag')->getTagsById($sType, $iItemId);
			
			if (!isset($aMainTags[$iItemId]))
			{
				return false;
			}
			
			foreach ($aMainTags[$iItemId] as $iKey => $aTag)
			{
				$aMainTags[$iItemId][$iKey]['tag_url'] = $sLink . $aTag['tag_url'] . '/';
				$sTags .= ', <a href="' . $aMainTags[$iItemId][$iKey]['tag_url'] . '">' . $aTag['tag_text'] . '</a>';	
				$sTagsClean .= ', ' . $aTag['tag_text'];
			}
			$sTags = ltrim($sTags, ',');
			$sTagsClean = ltrim($sTagsClean, ',');			
			
			$this->template()->assign(array(
					'sLink' => $sLink,
					'sType' => Phpfox::callback($sType . '.getTagType'),
					'sTags' => $sTags,
					'sMainTags' => $sTagsClean,
					'aTags' => $aMainTags[$iItemId],
					'iItemId' => $this->getParam('iItemId'),
					'iUserId' => $this->getParam('iUserId'),
					'bIsInline' => $this->getParam('bIsInline'),
					'bDontCleanTags' => $this->getParam('bDontCleanTags')
				)
			);
		}
		else 
		{			
			if (!($sType = $this->getParam('sType')))
			{
				return Phpfox_Error::trigger(_p('missing_param_stype'), E_USER_ERROR);
			}
	
			$aUser = $this->getParam('aUser');
			$sLink = Phpfox::callback($sType . '.getTagLink', $aUser);
			
			$aMainTags = $this->getParam('sTags');
			$sTags = '';
			$sTagsClean = '';
			foreach ($aMainTags as $iKey => $aTag)
			{
				$aMainTags[$iKey]['tag_url'] = $sLink . urlencode($aTag['tag_url']) . '/';
				$sTags .= ', <a href="' . $aMainTags[$iKey]['tag_url'] . '">' . $aTag['tag_text'] . '</a>';	
				$sTagsClean .= ', ' . $aTag['tag_text'];
			}
			$sTags = ltrim($sTags, ',');
			$sTagsClean = ltrim($sTagsClean, ',');
			
			$this->template()->assign(array(
					'sLink' => $sLink,
					'sType' => Phpfox::callback($sType . '.getTagType'),
					'sTags' => $sTags,
					'sMainTags' => $sTagsClean,
					'aTags' => $aMainTags,
					'iItemId' => $this->getParam('iItemId'),
					'iUserId' => $this->getParam('iUserId'),
					'bIsInline' => $this->getParam('bIsInline'),
					'bDontCleanTags' => $this->getParam('bDontCleanTags')
				)
			);			
		}
        return null;
	}
}
