<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 21, 2018, 2:58 am */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: controller.html.php 64 2009-01-19 15:05:54Z Raymond_Benc $
 */
 
 


						Phpfox::getLib('template')->getBuiltFile('friend.block.accept');
						 if (count ( $this->_aVars['aFriends'] )):  Phpfox::getBlock('core.moderation');  if (!isset($this->_aVars['aPager'])): Phpfox::getLib('pager')->set(array('page' => Phpfox::getLib('request')->getInt('page'), 'size' => Phpfox::getLib('search')->getDisplay(), 'count' => Phpfox::getLib('search')->getCount())); endif;  $this->getLayout('pager');  endif; ?>
